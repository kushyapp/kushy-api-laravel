<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreProducts;
use KushyApi\Http\Requests\UpdateProducts;
use KushyApi\Http\Resources\Products as ProductsResource;
use KushyApi\Http\Resources\ProductsCollection;
use KushyApi\Posts;
use KushyApi\Services\AddPostCategories;
use KushyApi\Services\AddPostMeta;
use KushyApi\Services\CreatePostSlug;
use KushyApi\Services\UploadPostMedia;
use KushyApi\Services\DeletePost;
use KushyApi\Traits\PostsCategory;

class ProductsController extends Controller
{
    use PostsCategory;

    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'product';

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
     * @var KushyApi\Http\Resources\ProductsCollection
     */
    protected $resourceCollection = ProductsCollection::class;

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
        $config = Config::get('api');

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */

        $products = QueryBuilder::for(Posts::class)
            ->whereSection('product')
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

        return (new ProductsCollection($products))
            ->response()
            ->setStatusCode(201);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts $request)
    {
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'product';
        $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));

        // Create the post
        $newProduct = Posts::create($validated);

        // Upload featured image and avatar - then attach to post
        $this->UploadPostMedia->upload($request, $brand, 'brands');

        // Save changes in case anything was added
        $newProduct->save();

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
            $this->AddPostCategories->create($categories, $newProduct->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $newProduct->id);
        }


        return (new ProductsResource($newProduct))
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
        $product = Posts::find($id);

        return (new ProductsResource($product))
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
        $product = Posts::with('categories')
            ->whereSection('product')
            ->whereSlug($slug)
            ->firstOrFail();

        return (new ProductsResource($product))
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
    public function update(UpdateProducts $request, $id)
    {
        $product = Posts::find($id);
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'shop';
        if($request->input('name'))
        {
            $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));
        }

        // Update the shop with validated post fields
        $product->fill($validated);

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
            $this->AddPostCategories->create($categories, $product->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $product->id);
        }


        return (new ProductsResource($product))
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
        $deletedProduct = Posts::destroy($id);

        if($deletedProduct)
        {
            return response()
                ->json(['status' => 'Successfully deleted the product'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => "Couldn't delete that product"])
                ->setStatusCode(400);
        }
    }
}
