<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreShops;
use KushyApi\Http\Requests\UpdateShops;
use KushyApi\Http\Resources\Shops as ShopsResource;
use KushyApi\Http\Resources\ShopsCollection;
use KushyApi\Categories;
use KushyApi\Inventory;
use KushyApi\Posts;
use KushyApi\Services\AddHoursPostMeta;
use KushyApi\Services\AddPostCategories;
use KushyApi\Services\AddPostMeta;
use KushyApi\Services\CreatePostSlug;
use KushyApi\Services\DeletePost;
use KushyApi\Services\UploadPostMedia;
use KushyApi\Traits\PostsCategory;

class ShopsController extends Controller
{
    use PostsCategory;

    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'shop';

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
     * @var KushyApi\Http\Resources\ShopsCollection
     */
    protected $resourceCollection = ShopsCollection::class;

    public function __construct(AddPostMeta $AddPostMeta, AddPostCategories $AddPostCategories, CreatePostSlug $CreatePostSlug) 
    {
        $this->middleware('auth:api', ['except' => ['index', 'show', 'menu', 'category', 'slug']]);
        $this->AddPostMeta = $AddPostMeta;
        $this->AddPostCategories = $AddPostCategories;
        $this->CreatePostSlug = $CreatePostSlug;
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
    public function index(Request $request)
    {
        $config = Config::get('api');

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */

        $shops = QueryBuilder::for($this->model)
            ->whereSection('shop')
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

        return (new $this->resourceCollection($shops))
            ->response()
            ->setStatusCode(201);

    }

    /**
     * Search for nearby shops by lat/lang
     *
     * @return \Illuminate\Http\Response
     */
    public function location($lat, $lng)
    {
        $config = Config::get('api');

        $shops = Posts::location($lat, $lng, null, 50, 3);

        return $this->resourceCollection($shops);
    }

    /**
     * Create a new shop (in Posts model)
     * Add categories, post meta, and hours of operation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShops $request)
    {
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'shop';
        $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));

        // Create the post using validated data
        $newShop = Posts::create($validated);

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
            $this->AddPostCategories->create($categories, $newShop->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $newShop->id);
        }

        // Handle the Hours of Operation
        if($request->input('hours'))
        {
            $AddHoursPostMeta->create($request, $newShop->id);   
        }


        return (new ShopsResource($newShop))
            ->response()
            ->setStatusCode(201);

    }

    /**
     * Store the avatar or featured image and attach to post
     * Goes off to a Service that accepts the request
     *
     * @param [uuid] $id - Post UUID
     * @return void
     */
    public function storeMedia(UploadPostMedia $UploadPostMedia, $id) 
    {
        $shop = $this->model::find($id);

        $UploadPostMedia->upload($request, $shop, 'shops');
        
        return (new ShopsResource($shop))
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
        $shop = $this->model::with('categories')->findOrFail($id);

        return (new ShopsResource($shop))
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
        $shop = $this->model::with('categories')->whereSlug($slug)->firstOrFail();

        return (new ShopsResource($shop))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Update the specified resource in storage.
     * 
     * Post is validated using the UpdateShops class.
     * Make sure to insert extra fields like slug and section
     * BEFORE post is updated
     * 
     * After post is updated, update media and pivot tables
     * - Featured image
     * - Avatar
     * - Categories
     * - Post Meta
     * - Hours of Operation
     *
     * @param  \Kushy\Http\Requests\UpdateShops  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShops $request, AddHoursPostMeta $AddHoursPostMeta, $id)
    {
        $shop = $this->model::find($id);
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'shop';
        if($request->input('name'))
        {
            $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));
        }

        // Update the shop with validated post fields
        $shop->fill($validated);

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
            $this->AddPostCategories->create($categories, $shop->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $shop->id);
        }

        // Handle the Hours of Operation
        if($request->input('hours'))
        {
            $AddHoursPostMeta->create($request, $shop->id);   
        }


        return (new ShopsResource($shop))
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
        $deletedShop = $this->model::destroy($id);

        if($deletedShop)
        {
            return response()
                ->json(['status' => 'Successfully deleted the shop'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => "Couldn't delete that shop"])
                ->setStatusCode(400);
        }
    }
}
