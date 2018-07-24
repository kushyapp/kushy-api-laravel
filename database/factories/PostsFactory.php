<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(KushyApi\Posts::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'categories' => '1',
    ];
});

$factory->state(KushyApi\Posts::class, 'shops', [
    'section' => 'shops',
]);

$factory->state(KushyApi\Posts::class, 'brands', [
    'section' => 'brands',
]);

$factory->state(KushyApi\Posts::class, 'products', [
    'section' => 'products',
]);

$factory->state(KushyApi\Posts::class, 'strains', [
    'section' => 'strains',
]);
