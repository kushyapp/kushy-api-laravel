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

Route::middleware('auth:api')->get('/user', function (Request $request) {

    $user = $request->user();

    if ($user->tokenCan('access-email')) {
        $user->makeVisible('email');
    }

    if ($user->tokenCan('access-patient-status')) {
        $user->makeVisible('verified');
    }


    if ($user->tokenCan('access-user-account')) {
        $user->makeVisible('email'); 
        $user->makeVisible('type');
        $user->makeVisible('verified');
        $user->makeVisible('drivers_license');
        $user->makeVisible('doctors_rec');
        $user->makeVisible('address');
        $user->makeVisible('city');
        $user->makeVisible('state');
        $user->makeVisible('postal_code');
        $user->makeVisible('country');
        $user->makeVisible('billing_first_name');
        $user->makeVisible('billing_last_name');
        $user->makeVisible('billing_address');
        $user->makeVisible('billing_city');
        $user->makeVisible('billing_country');
        $user->makeVisible('billing_state');
        $user->makeVisible('billing_postal_code');
        $user->makeVisible('billing_phone');

        $user->makeVisible('shipping_first_name');
        $user->makeVisible('shipping_last_name');
        $user->makeVisible('shipping_address');
        $user->makeVisible('shipping_city');
        $user->makeVisible('shipping_country');
        $user->makeVisible('shipping_state');
        $user->makeVisible('shipping_postal_code');
        $user->makeVisible('shipping_phone');
    }

    return $user;
});

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
    Route::apiResource('brands', 'BrandsController');

    // Products
    Route::apiResource('products', 'ProductsController');

    // Shops
    Route::apiResource('shops', 'ShopsController');
    Route::get('shops/location/{lat}/{lng}', 'ShopsController@location');
    Route::post('shops/media', 'ShopsController@storeMedia');

    // Strains
    Route::apiResource('strains', 'StrainsController');

    /*
    |----------------------------------------------------------------------
    | Sub-sections for main section
    | (e.g. shop reviews)
    |----------------------------------------------------------------------
    */

    // Bookmarks
    Route::apiResource('bookmarks', 'BookmarksController');
    
    // Deals
    Route::apiResource('deals', 'DealsController');

    // Photos
    Route::apiResource('photos', 'PhotosController');
    Route::get('photos/post/{id}', 'PhotosController@post');
    Route::get('photos/user/{id}', 'PhotosController@user');

    // Reviews
    Route::apiResource('reviews', 'ReviewsController');
    Route::get('reviews/post/{id}', 'ReviewsController@post');
    Route::get('reviews/user/{id}', 'ReviewsController@user');

    /*
    |----------------------------------------------------------------------
    | Business
    |----------------------------------------------------------------------
    */
    // Inventory
    Route::apiResource('inventory', 'InventoryController');
    Route::get('inventory/menu/{slug}', 'InventoryController@menu');

    /*
    |----------------------------------------------------------------------
    | E-Commerce
    |----------------------------------------------------------------------
    */
    // Orders
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
    Route::apiResource('activity', 'ActivityController');

});

