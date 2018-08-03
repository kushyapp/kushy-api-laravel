<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Requests\StoreCarts;
use KushyApi\Http\Resources\UsersPermissions as UsersPermissionsResource;
use KushyApi\Http\Resources\UsersPermissionsCollection;
use KushyApi\Http\Controllers\ApiController;
use KushyApi\UsersPermissions;

class UsersPermissionsController extends ApiController
{
    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'permission';

    /**
     * The model to use when querying/deleting
     *
     * @var class
     */
    protected $model = UsersPermissions::class;

    /**
     * Relationships to allow users to include in queries
     *
     * @var array
     */
    protected $includes = [
        'post',
        'user',
    ];

    /**
     * Allowed filters for users 
     *
     * @var array
     */
    protected $filters = [
        'business_id',
        'section',
        'user_id',
        'claimed',
        'user_type',
    ];

    /**
     * API Resource collection
     *
     * @var class
     */
    protected $resourceCollection = UsersPermissionsCollection::class;
    
    /**
     * API Resource
     *
     * @var class
     */
    protected $resource = UsersPermissionsResource::class;
}
