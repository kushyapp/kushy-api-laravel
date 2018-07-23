<?php

use Illuminate\Database\Seeder;

class StrainsMetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Grab strain id by strain name from Strain DB
        $strain = DB::table('strains')->where('name', 'like', "%$strain_name}")->get();

        // Insert into Strain Meta table
        DB::table('users')->insert([
            'name' => "Kushy",
            'email' => "contact@kushy.net",
            'password' => '$2y$10$ROQAWoIs4ozOlbXw.8mzd.buCO8ER8NyFZpKrdFnMrmmeCD0cg05u',
            'created_at' => '2017-12-29 18:42:06',
            'updated_at' => '2017-12-29 18:42:06',
            'type' => 'admin',
        ]);
    }
}
