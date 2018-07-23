<?php

use Illuminate\Database\Seeder;

class CategoriesRelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Shops
        $shops = DB::table('shops')->get();

        foreach($shops as $shop) {

            // Get Category ID
            $category = DB::table('categories')->where('name', $shop->type)->first();
            if($category) {

                // Insert into Categories Relationship
                DB::table('categories_relationships')->insert([
                    'category_id' => $category->id,
                    'section' => 'shops',
                    'item_id' => $shop->id,
                ]);

            }

        }
        
        // Brands
        $brands = DB::table('brands')->get();

        foreach($brands as $brand) {

            // Make array of comma-separated categories
            $categories = explode(', ', $brand->category);
            foreach($categories as $catName) {
                if($catName !== '') {

                    // Get Category ID
                    $category = DB::table('categories')->where('name', $catName)->first();
                    if($category) {

                        // Insert into Categories Relationship
                        DB::table('categories_relationships')->insert([
                            'category_id' => $category->id,
                            'section' => 'brands',
                            'item_id' => $brand->id,
                        ]);

                    }

                }
            }

        }


        
    }
}
