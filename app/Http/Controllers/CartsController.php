<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Requests\StoreCarts;
use KushyApi\Http\Resources\Carts as CartsResource;
use KushyApi\Http\Resources\CartsCollection;
use KushyApi\Http\Controllers\ApiController;
use KushyApi\Carts;

class CartsController extends ApiController
{
    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'cart';

    /**
     * The model to use when querying/deleting
     *
     * @var [type]
     */
    protected $model = Carts::class;

    /**
     * Relationships to allow users to include in queries
     *
     * @var array
     */
    protected $includes = [
        'user',
        'shop',
        'items',
    ];

    /**
     * Allowed filters for users 
     *
     * @var array
     */
    protected $filters = [
        'shop_id',
        'user_id',
    ];

    /**
     * API Resource collection
     *
     * @var [type]
     */
    protected $resourceCollection = CartsCollection::class;
    
    /**
     * API Resource
     *
     * @var [type]
     */
    protected $resource = CartsResource::class;
}
