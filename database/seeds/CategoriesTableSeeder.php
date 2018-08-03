<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert top level categories
        $topLevelCategories = [
            // Shops
            [
                'name' => "Medical Marijuana Dispensary",
                'slug' => "medical-marijuana-dispensary",
                'section' => 'shop'
            ],
            [
                'name' => "Medical Marijuana Delivery",
                'slug' => "medical-marijuana-delivery",
                'section' => 'shop'
            ],
            [
                'name' => "Recreational Shop",
                'slug' => "recreational-shop",
                'section' => 'shop'
            ],
            [
                'name' => "Recreational Delivery",
                'slug' => "recreational-delivery",
                'section' => 'shop'
            ],
            [
                'name' => "Headshop",
                'slug' => "headshop",
                'section' => 'shop'
            ],
            [
                'name' => "Doctor",
                'slug' => "doctor",
                'section' => 'shop'
            ],
            [
                'name' => "Glass Gallery",
                'slug' => "glass-gallery",
                'section' => 'shop'
            ],
            // Brands & Products
            [
                'name' => "Flowers",
                'slug' => "flowers",
                'section' => 'product'
            ],
            [
                'name' => "Concentrates",
                'slug' => "concentrates",
                'section' => 'product'
            ],
            [
                'name' => "Edibles",
                'slug' => "edibles",
                'section' => 'product'
            ],
            [
                'name' => "Topicals",
                'slug' => "topicals",
                'section' => 'product'
            ],
            [
                'name' => "Accessories",
                'slug' => "accessories",
                'section' => 'product'
            ],
            [
                'name' => "Vapes",
                'slug' => "vapes",
                'section' => 'product'
            ],
            [
                'name' => "Pets",
                'slug' => "pets",
                'section' => 'product'
            ],
            [
                'name' => "Tinctures",
                'slug' => "tinctures",
                'section' => 'product'
            ],
            [
                'name' => "Hybrid",
                'slug' => "hybrid",
                'section' => 'strain'
            ],
            [
                'name' => "Sativa",
                'slug' => "sativa",
                'section' => 'strain'
            ],
            [
                'name' => "Indica",
                'slug' => "indica",
                'section' => 'strain'
            ],
        ];

        foreach($topLevelCategories as $topLevelCategory) {

            DB::table('categories')->insert($topLevelCategory);

        }

        // Insert low level categories and find parents
        $midLevelCategories = [
            // Products
            // Concentrates
            [
                'name' => "RSO",
                'slug' => "rso",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            [
                'name' => "Bubble Hash",
                'slug' => "bubble-hash",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            [
                'name' => "Shatter",
                'slug' => "shatter",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            [
                'name' => "Kief",
                'slug' => "kief",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            [
                'name' => "Wax",
                'slug' => "wax",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            [
                'name' => "Oil",
                'slug' => "oil",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            [
                'name' => "Crumble",
                'slug' => "crumble",
                'section' => 'product',
                'parent' => "concentrates"
            ],
            // Flowers
            [
                'name' => "Pre-Roll",
                'slug' => "pre-Roll",
                'section' => 'product',
                'parent' => "flowers"
            ],
            // Edibles
            [
                'name' => "Chocolate",
                'slug' => "chocolate",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Candy",
                'slug' => "candy",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Butter",
                'slug' => "butter",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Drink",
                'slug' => "drink",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Spread",
                'slug' => "spread",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Snack",
                'slug' => "snack",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Sauce",
                'slug' => "sauce",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Dressing",
                'slug' => "dressing",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Salt",
                'slug' => "salt",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Soup",
                'slug' => "soup",
                'section' => 'product',
                'parent' => "edibles"
            ],
            [
                'name' => "Pill",
                'slug' => "pill",
                'section' => 'product',
                'parent' => "edibles"
            ],
            // Vapes
            [
                'name' => "Vape Cartidge",
                'slug' => "vape-cartidge",
                'section' => 'product',
                'parent' => "vapes"
            ],
        ];

        foreach($midLevelCategories as $midLevelCategory) {

            // Grab the parent ID
            $id = DB::table('categories')->where('slug', $midLevelCategory['parent'])->first();

            if($id) {
                // Redefine parent as ID
                $midLevelCategory['parent'] = $id->id;

                // Insert into Categories
                DB::table('categories')->insert($midLevelCategory);
            }

        }


    }
}
