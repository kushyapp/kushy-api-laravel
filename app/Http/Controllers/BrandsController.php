<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreBrands;
use KushyApi\Http\Requests\UpdateBrands;
use KushyApi\Http\Resources\Brands as BrandsResource;
use KushyApi\Http\Resources\BrandsCollection;
use KushyApi\Posts;
use KushyApi\Services\AddPostCategories;
use KushyApi\Services\AddPostMeta;
use KushyApi\Services\CreatePostSlug;
use KushyApi\Services\DeletePost;
use KushyApi\Services\UploadPostMedia;
use KushyApi\Traits\PostsCategory;

class BrandsController extends Controller
{
    use PostsCategory;

    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'brand';

    /**
     * Config facade
     *
     * @var Illuminate\Support\Facades\Config
     */
    protected $config = Config::class;

    /**
     * The primary model used for querying this endpoint
     *
     * @var KushyApi\Posts
     */
    protected $model = Posts::class;

    /**
     * The resource collection to display an array of model data
     *
     * @var KushyApi\Http\Resources\BrandsCollection
     */
    protected $resourceCollection = BrandsCollection::class;

    public function __construct(AddPostMeta $AddPostMeta, AddPostCategories $AddPostCategories, CreatePostSlug $CreatePostSlug, UploadPostMedia $UploadPostMedia) 
    {
        $this->middleware('auth:api', ['except' => ['index', 'show', 'category', 'slug']]);
        $this->AddPostMeta = $AddPostMeta;
        $this->AddPostCategories = $AddPostCategories;
        $this->CreatePostSlug = $CreatePostSlug;
        $this->UploadPostMedia = $UploadPostMedia;
    }

    /**
     * Create post meta data (emails, phone, etc)
     *
     * @param array $postMeta
     * @param Posts::eloquent $shop
     * @return void
     */
    public function postMeta($postMeta, $postId)
    {
        foreach($postMeta as $metaName => $metaValue)
        {
            if($metaValue)
            {
                $this->AddPostMeta->create($postId, $metaName, $metaValue);
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = $this->config::get('api');

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */

        $brands = QueryBuilder::for(Posts::class)
            ->whereSection('brand')
            ->allowedFilters([
                'name', 
                'slug', 
                'rating', 
                'featured', 
                'state', 
                'city',
                'country',
            ])
            ->allowedIncludes([
                'bookmarks', 
                'categories', 
                'meta', 
                'brand', 
                'children', 
                'owners', 
                'images', 
                'inventory'
            ])
            ->paginate($config['query']['pagination']);

        return (new BrandsCollection($brands))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrands $request)
    {
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'brand';
        $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));

        // Create the post
        $newBrand = Posts::create($validated);

        // Upload featured image and avatar - then attach to post
        $this->UploadPostMedia->upload($request, $newBrand, 'brands');

        /**
         * Handle the categories
         * We check the category input, and the category sub-field
         * Just in case someone uses `shop.category`
         */
        if($request->input('category'))
        { 
            $categories = $request->input('category');
        } elseif($request->input('*.category')) {
            $categories = $request->input('*.category');
        }

        if(isset($categories))
        {
            $this->AddPostCategories->create($categories, $newBrand->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $newBrand->id);
        }


        return (new BrandsResource($newBrand))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Posts::with('categories')->findOrFail($id);

        return (new BrandsResource($brand))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource by slug
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function slug($slug)
    {
        $brand = Posts::with('categories')
            ->whereSection('brand')
            ->whereSlug($slug)
            ->firstOrFail();

        return (new BrandsResource($brand))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrands $request, $id)
    {
        $brand = Posts::find($id);
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'shop';
        if($request->input('name'))
        {
            $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));
        }

        // Update the shop with validated post fields
        $brand->fill($validated);

        // Upload featured image and avatar - then attach to post
        $this->UploadPostMedia->upload($request, $brand, 'brands');

        /**
         * Handle the categories
         * We check the category input, and the category sub-field
         * Just in case someone uses `shop.category`
         */
        if($request->input('category'))
        { 
            $categories = $request->input('category');
        } elseif($request->input('*.category')) {
            $categories = $request->input('*.category');
        }

        if(isset($categories))
        {
            $this->AddPostCategories->create($categories, $brand->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $brand->id);
        }


        return (new BrandsResource($brand))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedBrand = Posts::destroy($id);

        if($deletedBrand)
        {
            return response()
                ->json(['status' => 'Successfully deleted the brand'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => "Couldn't delete that brand"])
                ->setStatusCode(400);
        }
    }
}
