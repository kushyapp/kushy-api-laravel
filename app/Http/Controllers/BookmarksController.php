<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Controllers\ApiController;
use KushyApi\Http\Requests\StoreBookmarks;
use KushyApi\Http\Resources\Bookmarks as BookmarksResource;
use KushyApi\Http\Resources\BookmarksCollection;
use KushyApi\Bookmarks;

class BookmarksController extends ApiController
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
    protected $model = Bookmarks::class;

    /**
     * Relationships to allow users to include in queries
     *
     * @var array
     */
    protected $includes = [
        'user', 
        'post', 
    ];

    /**
     * Allowed filters for users 
     *
     * @var array
     */
    protected $filters = [
        'post_id',
        'user_id'
    ];

    /**
     * API Resource collection
     *
     * @var [type]
     */
    protected $resourceCollection = BookmarksCollection::class;
    
    /**
     * API Resource
     *
     * @var [type]
     */
    protected $resource = BookmarksResource::class;
}
