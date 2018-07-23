<?php

use Illuminate\Database\Seeder;

class FeaturedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert top level categories
        $featuredPosts = [
            // Shops
            [
                'item_id' => "833",
                'section' => "shops",
            ],
            [
                'item_id' => "1031",
                'section' => "shops",
            ],
            [
                'item_id' => "834",
                'section' => "shops",
            ],
            [
                'item_id' => "50",
                'section' => "shops",
            ],
            // Brands
            [
                'item_id' => "1775",
                'section' => "brands",
            ],
            [
                'item_id' => "1152",
                'section' => "brands",
            ],
            [
                'item_id' => "1776",
                'section' => "brands",
            ],
            [
                'item_id' => "1777",
                'section' => "brands",
            ],
            // Products
            [
                'item_id' => "7",
                'section' => "products",
            ],
            [
                'item_id' => "8",
                'section' => "products",
            ],
            [
                'item_id' => "10",
                'section' => "products",
            ],
            [
                'item_id' => "60",
                'section' => "products",
            ],
            [
                'item_id' => "109",
                'section' => "products",
            ],
        ];

        foreach($featuredPosts as $featured) {

            DB::table('featured')->insert($featured);

        }
    }
}
