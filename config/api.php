<?php

/*
|--------------------------------------------------------------------------
| API Configuration variables
|--------------------------------------------------------------------------
|
| This config contains the default settings for the API section. 
| You'll find things like pagination counts and rate limits here.
|
*/


return [

    /*
    |--------------------------------------------------------------------------
    | Query configurations
    |--------------------------------------------------------------------------
    |
    */

    'query'    => [
        'pagination' => 10,
        'order' => [
            'column' => 'name',
            'order' => 'asc'
        ],
    ],

];