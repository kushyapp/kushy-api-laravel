<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Requests\StoreCartItems;
use KushyApi\Http\Resources\CartItems as CartItemsResource;
use KushyApi\Http\Resources\CartItemsCollection;
use KushyApi\Http\Controllers\ApiController;
use KushyApi\CartItems;

class CartItemsController extends ApiController
{
    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'cart item';

    /**
     * The model to use when querying/deleting
     *
     * @var KushyApi\CartItems
     */
    protected $model = CartItems::class;

    /**
     * Relationships to allow users to include in queries
     *
     * @var array
     */
    protected $includes = [
        'cart',
    ];

    /**
     * Allowed filters for users 
     *
     * @var array
     */
    protected $filters = [
        'inventory_id',
        'cart_id',
    ];

    /**
     * API Resource collection
     *
     * @var KushyApi\Http\Resources\CartItemsCollection
     */
    protected $resourceCollection = CartItemsCollection::class;
    
    /**
     * API Resource
     *
     * @var KushyApi\Http\Resources\CartItems
     */
    protected $resource = CartItemsResource::class;
}
