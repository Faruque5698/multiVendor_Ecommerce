<?php

namespace Database\Seeders;

use App\Models\Banner;
use Database\Factories\BannerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserTableSeeder::class]);


        \App\Models\User::factory(50)->create();
        \App\Models\Category::factory(20)->create();
        \App\Models\Banner::factory(10)->create();



    }
}
