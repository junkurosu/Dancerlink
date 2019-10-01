<?php

use Illuminate\Database\Seeder;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '$2y$10$zv9BS6/1pWUcTUSAhJXBNezmrSfpAAEyn46GCoOdHVN8egigqc2Ce']);
    }
}
