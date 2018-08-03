<?php

use Illuminate\Database\Seeder;
use KushyApi\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        User::create([
            'name' => "Kushy",
            'username' => "kushy",
            'email' => "contact@kushy.net",
            'password' => '$2y$10$ROQAWoIs4ozOlbXw.8mzd.buCO8ER8NyFZpKrdFnMrmmeCD0cg05u',
            'created_at' => '2017-12-29 18:42:06',
            'updated_at' => '2017-12-29 18:42:06',
            'type' => 'admin',
        ]);
        
    }
}
