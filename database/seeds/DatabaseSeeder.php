<?php

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
        //$this->call(UserTableSeeder::class);
        factory(\App\Models\User::class, 5)->create();
        factory(\App\Models\BookAuthor::class, 10)->create();
    }
}
