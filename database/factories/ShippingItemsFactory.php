<?php

use Faker\Generator as Faker;
use KushyApi\Posts;

$factory->define(KushyApi\ShippingItems::class, function (Faker $faker) {
    $qty_ordered = $faker->numberBetween(1, 10);
    $qty_received = $faker->numberBetween(1, 10);
    $unit = $faker->numberBetween(1, 10);
    $retail = $unit * 2;

    return [
        'id' => $faker->uuid,
        'manifesto_id' => factory(KushyApi\ShippingManifesto::class)->create()->id,
        'uid_tag' => $faker->uuid,
        'qty_ordered' => (int) $qty_ordered,
        'qty_received' => (int) $qty_received,
        'unit_cost' => (int) $unit,
        'total_cost' => (int) $unit * $qty_ordered,
        'unit_retail_price' => (int) $retail,
        'total_retail_price' => (int) $retail * $qty_ordered,
        'description' => $faker->paragraph(),
    ];
});

$factory->state(KushyApi\ShippingItems::class, 'product', [
    'product_id' => Posts::whereSection('product')->inRandomOrder()->first()->id,
]);
