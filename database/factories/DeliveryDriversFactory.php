<?php

use Faker\Generator as Faker;
use KushyApi\User;

$factory->define(KushyApi\DeliveryDrivers::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,

        'user_id' => User::all()->random()->id,

        'name' => $faker->name,
        'drivers_license' => $faker->numberBetween(8000000, 9000000),
        'license_state' => $faker->state,
        'vehicle_make' => $faker->name,
        'vehicle_model' => $faker->name,
        'license_plate' => $faker->numberBetween(500000, 600000),
        'plate_state' => $faker->state,
    ];
});
