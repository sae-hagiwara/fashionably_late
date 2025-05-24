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
        //categories_table
        $this->call(CategoriesTableSeeder::class);
        //contacts_table
        $this->call(ContactsTableSeeder::class);
    }
}