<?php

use Illuminate\Database\Seeder;

use \App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	echo get_class($this) . "::run" . PHP_EOL;
    }
}
