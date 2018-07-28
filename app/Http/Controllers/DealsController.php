<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreActivity;
use KushyApi\Http\Resources\Deals as DealsResource;
use KushyApi\Http\Resources\DealsCollection;
use KushyApi\Posts;

class DealsController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
        $this->middleware('admin', ['except' => ['index', 'show']]);
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
        $categories = QueryBuilder::for(Posts::class)
            ->whereSection('deals')
            ->allowedFilters([
                'name',
                'slug',
                'city',
                'state',
                'postal_code',
                'country',
                'rating',
                'featured',
                'verified',
            ])
            ->allowedIncludes([
                'categories', 
                'meta', 
                'brand', 
                'images', 
                'bookmarks', 
            ])
            ->paginate($config['query']['pagination']);

        return (new DealsCollection($categories))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Posts::create($request->all());

        return (new DealsResource($category))
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDeals $request, $id)
    {
        // Grab the inventory item so we can update it
        $deal = Posts::findOrFail($id);

        $deal->fill($request->validated());
        
        return (new DealsResource($deal))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Posts::destroy($id);

        if($deleted)
        {
            return response()
                ->json(['status' => 'Successfully deleted the deal'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => "Couldn't delete that deal"])
                ->setStatusCode(400);
        }
    }
}
