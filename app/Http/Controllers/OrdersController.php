<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreOrders;
use KushyApi\Http\Resources\Orders as OrdersResource;
use KushyApi\Http\Resources\OrdersCollection;
use KushyApi\Orders;

class OrdersController extends Controller
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

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */

        $orders = QueryBuilder::for(Orders::class)
            ->allowedFilters([
                'shop_id',
                'user_id',
                'status',
                'total_price',
                'discount',
                'final_price'
            ])
            ->allowedIncludes([
                'user', 
                'shop', 
                'items', 
            ])
            ->paginate($config['query']['pagination']);

        return (new OrdersCollection($orders))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrders $request)
    {
        $order = Orders::create($request->validated());

        return (new OrdersResource($order))
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
        $order = Orders::findOrFail($id);

        return (new OrdersResource($order))
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
    public function update(StoreOrders $request, $id)
    {
        $order = Orders::findOrFail($id);

        $order->fill($request->validated());

        return (new OrdersResource($order))
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
        Orders::destroy($id);

        return response()->json([
            'code' => true,
            'response' => 'Successfully deleted order.'
        ]);
    }
}
