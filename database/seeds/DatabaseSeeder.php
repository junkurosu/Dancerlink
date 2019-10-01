<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTablesSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MetasTableSeeder::class);
        $this->call(ThreadTablesSeeder::class);
    }
}
