<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Resources\Shops as ShopsResource;
use KushyApi\Http\Resources\SearchCollection;
use KushyApi\Posts;

class SearchController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:api', ['except' => ['index', 'searchByColumn']]);
    }

    public function index(Request $request)
    {
        $config = Config::get('api');

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */
        $search = QueryBuilder::for(Posts::class)
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
        
        return (new SearchCollection($search))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $field - The database column to search
     * @param  string  $search - The search string
     * @return \Illuminate\Http\Response
     */
    public function searchByColumn($field, $search)
    {
        $config = Config::get('api');

        $search = Posts::with('categories')
                    ->where($field, 'like', "%$search%")
                    ->orderBy($config['query']['order']['column'], $config['query']['order']['order'])
                    ->paginate($config['query']['pagination']);

        return new SearchCollection($search);
    }
}
