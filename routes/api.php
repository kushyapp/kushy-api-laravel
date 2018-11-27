<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Developer Portal
Route::get('/', 'DeveloperController@index');

/*
|--------------------------------------------------------------------------
| v1 API Routes 
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {
    
    /*
    |----------------------------------------------------------------------
    | Search
    |----------------------------------------------------------------------
    */
    Route::get('search/posts/', 'SearchController@index');
    // Route::get('search/{field}/{search}', 'SearchController@searchByColumn');

    
    /*
    |----------------------------------------------------------------------
    | Website Meta
    |----------------------------------------------------------------------
    */
    // State / City listing
    Route::get('states', 'StatesController@index');
    Route::get('states/{state}', 'StatesController@show');

    // Categories
    Route::apiResource('categories', 'CategoriesController');


    /*
    |----------------------------------------------------------------------
    | Main website sections
    |----------------------------------------------------------------------
    */

    // Brands
    Route::get('brands/slug/{slug}', 'BrandsController@slug');
    Route::get('brands/category/{category}', 'BrandsController@category');
    Route::apiResource('brands', 'BrandsController');

    // Products
    Route::get('products/slug/{slug}', 'ProductsController@slug');
    Route::get('products/category/{category}', 'ProductsController@category');
    Route::apiResource('products', 'ProductsController');

    // Shops
    Route::get('shops/slug/{slug}', 'ShopsController@slug');
    Route::get('shops/category/{category}', 'ShopsController@category');
    Route::get('shops/location/{lat}/{lng}', 'ShopsController@location');
    Route::post('shops/media', 'ShopsController@storeMedia');
    Route::apiResource('shops', 'ShopsController');

    // Strains
    Route::get('strains/products/{id}', 'StrainsController@products');
    Route::get('strains/slug/{slug}', 'StrainsController@slug');
    Route::get('strains/category/{category}', 'StrainsController@category');
    Route::apiResource('strains', 'StrainsController');

    /*
    |----------------------------------------------------------------------
    | Sub-sections for main section
    | (e.g. shop reviews)
    |----------------------------------------------------------------------
    */

    // Bookmarks
    Route::get('bookmarks/user/', 'BookmarksController@user');
    Route::apiResource('bookmarks', 'BookmarksController');
    
    // Deals
    Route::apiResource('deals', 'DealsController');

    // Photos
    Route::apiResource('photos', 'PhotosController');
    Route::get('photos/post/{id}', 'PhotosController@post');
    Route::get('photos/user/{id}', 'PhotosController@user');

    // Reviews
    Route::get('reviews/post/{id}', 'ReviewsController@post');
    Route::get('reviews/user/', 'ReviewsController@user');
    Route::get('reviews/user/{id}', 'ReviewsController@byUser');
    Route::apiResource('reviews', 'ReviewsController');

    /*
    |----------------------------------------------------------------------
    | Business
    |----------------------------------------------------------------------
    */
    // Inventory
    Route::apiResource('inventory', 'InventoryController');
    Route::get('inventory/menu/{slug}', 'InventoryController@menu');
    
    Route::apiResource('manifestos/items', 'ShippingItemsController');
    Route::apiResource('manifestos', 'ShippingManifestosController');

    Route::apiResource('permissions', 'UsersPermissionsController');

    /*
    |----------------------------------------------------------------------
    | E-Commerce
    |----------------------------------------------------------------------
    */
    // Orders
    Route::apiResource('carts/items', 'CartItemsController');
    Route::apiResource('carts', 'CartsController');
    
    // Orders
    Route::apiResource('orders', 'OrdersController');

    // Order Items
    Route::apiResource('orders/items', 'OrderItemsController');


    /*
    |----------------------------------------------------------------------
    | Users
    |----------------------------------------------------------------------
    */
    // User Activity
    Route::get('users/profile/', 'UserController@profile');
    Route::apiResource('users', 'UserController');

    Route::get('activity/user/', 'ActivityController@user');
    Route::apiResource('activity', 'ActivityController');

});

