<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=> 'Makanan',
            'image_link' =>'jpeg'
        ]);

        DB::table('categories')->insert([
            'name'=> 'Minuman',
            'image_link' =>'jpeg'
        ]);
    }
}
