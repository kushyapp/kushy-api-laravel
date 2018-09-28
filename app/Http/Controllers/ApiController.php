<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;

abstract class ApiController extends Controller
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
        $categories = QueryBuilder::for($this->model)
            ->allowedFilters($this->filters)
            ->allowedIncludes($this->includes)
            ->get();

        return (new $this->resourceCollection($categories))
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
        $category = $this->model::create($request->all());

        return (new $this->resource($category))
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
        $categories = $this->model::findOrFail($id);

        return (new $this->resource($categories))
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
        $category = $this->model::findOrFail($id);

        $category->fill($request->all());
        
        return (new $this->resource($category))
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
        $this->model::destroy($id);

        return response()->json([
            'code' => true,
            'response' => "Successfully deleted the {$this->section}."
        ]);
    }
}
