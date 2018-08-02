<?php

use Illuminate\Database\Seeder;

class DeliveryDriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KushyApi\DeliveryDrivers::class, 10)->create();
    }
}
