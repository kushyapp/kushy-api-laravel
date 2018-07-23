<?php

use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventory = [
            [
                'product_id'     => 5901,
                'section'        => "shops",
                'business_id'    => 834,
            ],
            [
                'product_id'     => 1382,
                'section'        => "shops",
                'business_id'    => 834,
            ],
            [
                'product_id'     => 2041,
                'section'        => "shops",
                'business_id'    => 834,
            ],
            [
                'product_id'     => 4192,
                'section'        => "shops",
                'business_id'    => 834,
            ],
        ];

        foreach($inventory as $product) {
            DB::table('inventories')->insert($product);
        }
    }
}
