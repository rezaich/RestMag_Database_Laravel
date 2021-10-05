<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {[
        $this->call(TotalSeeder::class),
        $this ->call(UserSeeder::class),
        $this->call(CategorySeeder::class)
        // \App\Models\User::factory(10)->create();
    ];
}
}
