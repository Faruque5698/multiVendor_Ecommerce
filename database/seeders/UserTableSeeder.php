<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            // admin

            [
                'full_name'=>'Ashaduzzaman Admin',
                'user_name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('12345678'),
                'role'=>'admin',
                'status'=>'active'
            ],

            // vendor

            [
                'full_name'=>'Ashaduzzaman Vendor',
                'user_name'=>'vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('12345678'),
                'role'=>'vendor',
                'status'=>'active'
            ],

            // customer

            [
                'full_name'=>'Ashaduzzaman Customer',
                'user_name'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('12345678'),
                'role'=>'customer',
                'status'=>'active'
            ]
        ]);

    }
}
