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

$factory->define(KushyApi\Bookmarks::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'user_id' => factory(KushyApi\User::class)->create()->id,
        'post_id' => factory(KushyApi\Posts::class)->states('shops')->create()->id,
    ];
});