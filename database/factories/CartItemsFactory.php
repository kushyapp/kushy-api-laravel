<?php

use Faker\Generator as Faker;

$factory->define(KushyApi\CartItems::class, function (Faker $faker) {
    return [
        'cart_id' => factory(KushyApi\Carts::class)->create()->id,
        'inventory_id' => factory(KushyApi\Inventory::class)->states('gram')->create()->id,
        'count' => $faker->numberBetween(1, 5),
    ];
});
