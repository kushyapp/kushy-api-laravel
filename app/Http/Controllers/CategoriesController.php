<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreCategories;
use KushyApi\Http\Resources\Categories as CategoriesResource;
use KushyApi\Http\Resources\CategoriesCollection;
use KushyApi\Categories;

class CategoriesController extends Controller
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
    public function index(Request $request)
    {
        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */
        $categories = QueryBuilder::for(Categories::class)
            ->allowedFilters([
                'name',
                'slug',
                'section'
            ])
            ->allowedIncludes([
                'relationships', 
                'parents', 
            ])
            ->get();

        return (new CategoriesCollection($categories))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategories $request)
    {
        $category = Categories::create($request->all());

        return (new CategoriesResource($category))
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
        $categories = Categories::findOrFail($id);

        return (new CategoriesResource($categories))
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
    public function update(StoreCategories $request, $id)
    {
        // Grab the inventory item so we can update it
        $category = Categories::findOrFail($id);

        $category->fill($request->all());
        
        return (new CategoriesResource($category))
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
        Categories::destroy($id);

        return response()->json([
            'code' => true,
            'response' => 'Successfully deleted the category.'
        ]);
    }
}
