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
        $this->call(UserAdminDevSeeder::class);
        factory(\App\Models\User::class, 5)->create();
        factory(\App\Models\BookAuthor::class, 10)->create();
        factory(\App\Models\Book::class, 10)->create();
        $this->call(BookGenreSeeder::class);
        $this->call(BookSeriesSeeder::class);
        $this->call(PublishingfHouseSeeder::class);
        factory(\App\Models\BookAuthorsLink::class, 10)->create();
        factory(\App\Models\BookGenresLink::class, 10)->create();
        factory(\App\Models\BookSeriesLink::class, 10)->create();
    }
}
