<?php

use Faker\Generator as Faker;

$factory->define(KushyApi\Carts::class, function (Faker $faker) {
    return [
        'user_id' => factory(KushyApi\User::class)->create()->id,
        'shop_id' => factory(KushyApi\Posts::class)->states('shops')->create()->id,
    ];
});
