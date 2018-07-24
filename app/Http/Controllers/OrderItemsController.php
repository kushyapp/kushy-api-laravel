<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use KushyApi\Http\Requests\StoreOrderItems;
use KushyApi\Http\Resources\OrderItems as OrderItemsResource;
use KushyApi\Http\Resources\OrderItemsCollection;
use KushyApi\OrderItems;

class OrderItemsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('business');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::get('api');

        $orders = OrderItems::paginate($config['query']['pagination']);

        return (new OrderItemsCollection($orders))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderItems $request)
    {
        $orderItem = OrderItems::create($request->validated());

        return (new OrdersResource($orderItem))
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
        $orderItem = OrderItems::findOrFail($id);

        return (new OrdersResource($orderItem))
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
        $orderItem = OrderItems::findOrFail($id);

        $orderItem->fill($request->validated());

        return (new OrdersResource($orderItem))
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
        OrderItems::destroy($id);

        return response()->json([
            'code' => true,
            'response' => 'Successfully deleted order item.'
        ]);
    }
}
