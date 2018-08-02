<?php

use Faker\Generator as Faker;

/**
 * Creates user activity for a randomly generated user
 * and activity is randomly generated bookmark (owned by user)
 */

$factory->define(KushyApi\UserActivity::class, function (Faker $faker) {
    $userId = factory(KushyApi\User::class)->create()->id;
    echo $userId;
    return [
        'id' => $faker->uuid,
        'user_id' => $userId,
        'item_id' => factory(KushyApi\Bookmarks::class)->create([
            'user_id' => $userId,
        ])->id,
        'section' => 'bookmarks',
    ];
});