<?php

use Illuminate\Database\Seeder;

class UserPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = [
            [
                'business_id'       => 1,
                'section'           => "shops",
                'user_id'           => 2,
                'claimed'           => 1,
                'user_type'         => "owner",
            ],
            [
                'business_id'       => 2,
                'section'           => "shops",
                'user_id'           => 2,
                'claimed'           => 1,
                'user_type'         => "owner",
            ],
            [
                'business_id'       => 3,
                'section'           => "shops",
                'user_id'           => 2,
                'claimed'           => 1,
                'user_type'         => "owner",
            ],
            [
                'business_id'       => 4,
                'section'           => "shops",
                'user_id'           => 2,
                'claimed'           => 1,
                'user_type'         => "owner",
            ],
            [
                'business_id'       => 1,
                'section'           => "brands",
                'user_id'           => 2,
                'claimed'           => 1,
                'user_type'         => "owner",
            ],
            [
                'business_id'       => 2,
                'section'           => "brands",
                'user_id'           => 2,
                'claimed'           => 1,
                'user_type'         => "owner",
            ],
        ];

        foreach($permissions as $permission) {
            DB::table('users_permissions')->insert($permission);
        }
    }
}
