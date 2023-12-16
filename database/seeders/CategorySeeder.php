<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'cat_name' => 'kitchen',
            'cat_name' => 'Home and applinces',
            'cat_name' => 'Electrical',
            'cat_name' => 'Toys',
            'cat_name' => 'Tosdvsvsvsys',
          
        ]);
    }
}
