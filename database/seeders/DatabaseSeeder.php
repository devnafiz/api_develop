<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(20)->create();
         \App\Models\Review::factory(50)->create();

        //factory(App\Models\Product::class,50)->create();
        //factory(App\Models\Review::class,150)->create();
    }
}
