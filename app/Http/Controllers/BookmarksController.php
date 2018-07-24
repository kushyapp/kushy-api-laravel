<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreBookmarks;
use KushyApi\Http\Resources\Bookmarks as BookmarksResource;
use KushyApi\Http\Resources\BookmarksCollection;
use KushyApi\Bookmarks;

class BookmarksController extends Controller
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

        $bookmarks = QueryBuilder::for(Bookmarks::class)
            ->allowedFilters([
                'post_id',
                'user_id'
            ])
            ->allowedIncludes([
                'user', 
                'post', 
            ])
            ->paginate($config['query']['pagination']);

        return (new BookmarksCollection($bookmarks))
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
        $bookmark = Bookmarks::create($request->validated());

        return (new BookmarksResource($bookmark))
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
        $bookmark = Bookmarks::findOrFail($id);

        return (new BookmarksResource($bookmark))
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
    public function update(Request $request, $id)
    {
        // Grab the inventory item so we can update it
        $bookmark = Bookmarks::findOrFail($id);

        $bookmark->fill($request->validated());
        
        return (new BookmarksResource($bookmark))
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
        Bookmarks::destroy($id);

        return response()->json([
            'code' => true,
            'response' => 'Successfully deleted bookmark.'
        ]);
    }
}
