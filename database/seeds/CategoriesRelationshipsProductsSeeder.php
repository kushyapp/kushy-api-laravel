<?php

use Illuminate\Database\Seeder;

class CategoriesRelationshipsProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // products
        $products = DB::table('products_old')->get();

        foreach($products as $product) {

            // Make array of comma-separated categories
            $categories = explode(',', $product->category);
            foreach($categories as $catName) {
                if($catName !== '') {

                    // Get Category ID
                    $category = DB::table('categories')->where('name', 'like', "%$catName%")->first();
                    if($category) {

                        // Insert into Categories Relationship
                        DB::table('categories_relationships')->insert([
                            'category_id' => $category->id,
                            'section' => 'products',
                            'item_id' => $product->id,
                        ]);

                    }

                }
            }

        } // products


    }
}
