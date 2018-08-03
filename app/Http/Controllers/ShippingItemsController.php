<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Requests\StoreCarts;
use KushyApi\Http\Resources\ShippingItems as ShippingItemsResource;
use KushyApi\Http\Resources\ShippingItemsCollection;
use KushyApi\Http\Controllers\ApiController;
use KushyApi\ShippingItems;

class ShippingItemsController extends ApiController
{
    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'shipping manifesto item';

    /**
     * The model to use when querying/deleting
     *
     * @var [type]
     */
    protected $model = ShippingItems::class;

    /**
     * Relationships to allow users to include in queries
     *
     * @var array
     */
    protected $includes = [
        'product',
        'manifesto',
    ];

    /**
     * Allowed filters for users 
     *
     * @var array
     */
    protected $filters = [
        'manifesto_id',
        'product_id',
        'uid_tag',
        'qty_ordered',
        'qty_received',
        'unit_cost',
        'total_cost',
        'unit_retail_price',
        'total_retail_price',
        'rejected',
    ];

    /**
     * API Resource collection
     *
     * @var [type]
     */
    protected $resourceCollection = ShippingItemsCollection::class;
    
    /**
     * API Resource
     *
     * @var [type]
     */
    protected $resource = ShippingItemsResource::class;
}
