<?php

use Faker\Generator as Faker;

$factory->define(KushyApi\Inventory::class, function (Faker $faker) {
    return [
        'product_id' => factory(KushyApi\Posts::class)->states('products')->create()->id,
        'business_id' => factory(KushyApi\Posts::class)->states('shops')->create()->id,
        'description' => $faker->paragraph(),
        'list_price' => $faker->numberBetween(11, 20),
        'sale_price' => $faker->numberBetween(1, 10),
        'thc' => $faker->numberBetween(10, 25),
        'cbd' => $faker->numberBetween(0, 1),
        'cbn' => $faker->numberBetween(0, 1),
        'half_gram' => $faker->numberBetween(3, 5),
        'one_gram' => $faker->numberBetween(7, 10),
        'two_grams' => $faker->numberBetween(0, 10),
        'eighth_ounce' => $faker->numberBetween(25, 35),
        'quarter_ounce' => $faker->numberBetween(50, 70),
        'half_ounce' => $faker->numberBetween(100, 140),
        'ounce' => $faker->numberBetween(280, 350),
        'quarter_pound' => $faker->numberBetween(1200, 1500),
        'half_pound' => $faker->numberBetween(2000, 2500),
        'pound' => $faker->numberBetween(3000, 3500),
    ];
});


$factory->state(KushyApi\Inventory::class, 'gram', [
    'pricing_type' => 'gram',
]);

$factory->state(KushyApi\Inventory::class, 'unit', [
    'pricing_type' => 'unit',
]);
