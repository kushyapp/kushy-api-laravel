<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreStrains;
use KushyApi\Http\Requests\UpdateStrains;
use KushyApi\Http\Resources\Strains as StrainsResource;
use KushyApi\Http\Resources\StrainsCollection;
use KushyApi\Posts;
use KushyApi\Services\AddHoursPostMeta;
use KushyApi\Services\AddPostCategories;
use KushyApi\Services\AddPostMeta;
use KushyApi\Services\CreatePostSlug;
use KushyApi\Services\DeletePost;
use KushyApi\Services\UploadPostMedia;

class StrainsController extends Controller
{

    public function __construct(AddPostMeta $AddPostMeta, AddPostCategories $AddPostCategories, CreatePostSlug $CreatePostSlug, UploadPostMedia $UploadPostMedia) 
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
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

        $strains = QueryBuilder::for(Posts::class)
            ->whereSection('strain')
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

        return (new StrainsCollection($strains))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStrains $request)
    {
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'strain';
        $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));

        // Create the post
        $newStrain = Posts::create($validated);

        // Upload featured image and avatar - then attach to post
        $this->UploadPostMedia->upload($request, $newStrain, 'strains');

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
            $this->AddPostCategories->create($categories, $newStrain->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $newStrain->id);
        }


        return (new StrainsResource($newStrain))
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
        $strain = Posts::find($id);

        return (new StrainsResource($strain))
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
    public function update(UpdateStrains $request, $id)
    {
        $strain = Posts::find($id);
        $validated = $request->validated();

        // Generate a slug and hardcode the section
        $validated['section'] = 'shop';
        if($request->input('name'))
        {
            $validated['slug'] = $this->CreatePostSlug->create($request->input('name'));
        }

        // Update the shop with validated post fields
        $strain->fill($validated);

        // Upload featured image and avatar - then attach to post
        $this->UploadPostMedia->upload($request, $strain, 'strains');

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
            $this->AddPostCategories->create($categories, $strain->id);
        }

        /**
         * Create post meta data (emails, phone, etc)
         */
        if($postMeta = $request->input('meta'))
        {
            $this->postMeta($postMeta, $strain->id);
        }


        return (new StrainsResource($strain))
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
        $deletedStrain = Posts::destroy($id);

        if($deletedStrain)
        {
            return response()
                ->json(['status' => 'Successfully deleted the strain'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => "Couldn't delete that strain"])
                ->setStatusCode(400);
        }
    }
}
