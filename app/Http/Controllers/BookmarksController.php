<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreBookmarks;
use KushyApi\Http\Requests\DeleteBookmark;
use KushyApi\Http\Resources\Bookmarks as BookmarksResource;
use KushyApi\Http\Resources\BookmarksCollection;
use KushyApi\Bookmarks;

class BookmarksController extends Controller
{
    
    public function __construct() 
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */
        $categories = QueryBuilder::for(Bookmarks::class)
            ->allowedFilters([
                'post_id',
                'user_id'
            ])
            ->allowedIncludes([
                'user',
                'post',
                'activity'
            ])
            ->get();

        return (new BookmarksCollection($categories))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * We don't type check the request, it's checked by extended class
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookmarks $request)
    {
        $category = Bookmarks::create($request->all());

        return (new BookmarksResource($category))
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
        $categories = Bookmarks::findOrFail($id);

        return (new BookmarksResource($categories))
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
        $category = Bookmarks::findOrFail($id);

        $category->fill($request->all());
        
        return (new BookmarksResource($category))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteBookmark $request, $id)
    {
        Bookmarks::destroy($id);

        return response()->json([
            'code' => true,
            'response' => "Successfully deleted the bookmark."
        ]);
    }
}
