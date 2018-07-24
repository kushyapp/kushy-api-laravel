<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Controllers\Controller;
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
        if($section = $request->get('section'))
        {
            $categories = Categories::whereSection($section)->get();
        } else {
            $categories = Categories::all();
        }

            return response()
                ->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()
            ->setStatusCode(201)
            ->json($category);
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

        return response()
            ->json($categories)
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
        $category = Categories::findOrFail($id);

        $category->fill($request->all());
        
        return response()
            ->setStatusCode(201)
            ->json($category);
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
            'response' => 'Successfully deleted categories.'
        ]);
    }
}
