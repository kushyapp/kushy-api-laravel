<?php

use Faker\Generator as Faker;
use KushyApi\Posts;
use KushyApi\User;

$factory->define(KushyApi\UsersPermissions::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,

        'business_id' => Posts::inRandomOrder()->whereSection('shop')->first()->id,
        'user_id' => User::all()->random()->id,
        'verified' => true,
        'user_type' => $faker->randomElement($array = array ('owner','employee', 'representative')),
        'permissions' => json_encode(array()),
    ];
});
