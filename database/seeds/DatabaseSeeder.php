<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            // BrandsTableSeeder::class,
            // ProductsTableSeeder::class,
            // ShopsTableSeeder::class,
            /**
             * Strain Table Seeder requires Strain Taxonomies to work
             */
            StrainsTaxonomiesTableSeeder::class,
            // StrainsTableSeeder::class,
            // Mini version of strains
            // StrainsSmallTableSeeder::class,
            CategoriesTableSeeder::class,
        ]);
        
        $this->call(PostsTableSeeder::class);
        $this->call(PostsCategoriesTableSeeder::class);
        $this->call(PostsMetaTableSeeder::class);
        $this->call(PostsRelationshipsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(BookmarksTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
    }
}
