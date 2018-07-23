<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Resources\Inventory as InventoryResource;
use KushyApi\Http\Resources\InventoryCollection;
use KushyApi\Inventory;
use KushyApi\Posts;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display a specific inventory item by it's ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // Grab the shop
        $inventory = Inventory::find($id);

        return new InventoryResource($inventory);
    }

    /**
     * Display the menu for the specified slug (shop/brand)
     *
     * @param  Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function menu(Request $request, $slug)
    {
        // Grab the shop
        $shop = Posts::whereSlug($slug)->firstOrFail();

        // Query for Menu
        $inventory = Inventory::with('product')
                            ->where('business_id', $shop->id)
                            ->get();

        $total = $inventory->count();


        // Find out when menu was last updated
        $menuLastUpdated = Inventory::with('product')
                            ->where('business_id', $shop->id)
                            ->orderBy('updated_at', 'desc')
                            ->first();
        $menuLastUpdated ? $menuLastUpdated = nicetime($menuLastUpdated->updated_at) : $menuLastUpdated = '420 years ago';
        $request->request->add(['menuLastUpdated' => $menuLastUpdated]);

        return (new InventoryCollection($inventory))
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
