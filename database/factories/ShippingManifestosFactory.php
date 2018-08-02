<?php

use Faker\Generator as Faker;
use KushyApi\DeliveryDrivers;
use KushyApi\Posts;
use KushyApi\User;

$factory->define(KushyApi\ShippingManifesto::class, function (Faker $faker) {
    $date = $faker->date($format = 'Y-m-d', $max = 'now') . ' ' . $faker->time($format = 'H:i:s', $max = 'now');
    return [
        'id' => $faker->uuid,

        'shipper_id' => Posts::all()->random()->id,
        'shipper_state_license' => $faker->uuid,
        'shipper_name' => $faker->name,
        'shipper_address' => $faker->streetAddress,
        'shipper_city' => $faker->city,
        'shipper_state' => $faker->state,
        'shipper_postal_code' => $faker->postcode,
        'shipper_phone' => $faker->phoneNumber,

        'receiver_id' => Posts::all()->random()->id,
        'receiver_state_license' => $faker->uuid,
        'receiver_name' => $faker->name,
        'receiver_address' => $faker->streetAddress,
        'receiver_city' => $faker->city,
        'receiver_state' => $faker->state,
        'receiver_postal_code' => $faker->postcode,
        'receiver_phone' => $faker->phoneNumber,
        'receiver_email' => $faker->email,
        
        'distributor_id' => Posts::all()->random()->id,
        'distributor_state_license' => $faker->uuid,
        'distributor_name' => $faker->name,
        'distributor_address' => $faker->streetAddress,
        'distributor_city' => $faker->city,
        'distributor_state' => $faker->state,
        'distributor_postal_code' => $faker->postcode,
        'distributor_phone' => $faker->phoneNumber,
        'distributor_email' => $faker->email,
        
        'delivery_id' => DeliveryDrivers::all()->random()->id,
        
        'owner_id' => User::all()->random()->id,

        'invoice' => $faker->words(3, true),
        'description' => $faker->words(3, true),
        'contact_name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'date_departure' => $date,
        'date_estimated_arrival' => $date,
        'date_actual_arrival' => $date,
        'date_signed' => $date,
        'digital_signature' => $faker->name,

        'access_token' => $faker->sha256,
    ];
});

$factory->state(KushyApi\ShippingManifesto::class, 'processing', [
    'status' => 'processing',
]);

$factory->state(KushyApi\ShippingManifesto::class, 'delivered', [
    'status' => 'delivered',
]);

$factory->state(KushyApi\ShippingManifesto::class, 'cancelled', [
    'status' => 'cancelled',
]);
