<?php

use Faker\Generator as Faker;

$factory->define(KushyApi\Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
    ];
});

$factory->state(KushyApi\Categories::class, 'section', [
    'section' => 'strain',
]);