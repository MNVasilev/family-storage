<?php

use Illuminate\Database\Seeder;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'book_genre_slug' => Str::slug('Фантастика'),
                'genre_name' => 'Фантастика',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'book_genre_slug' => Str::slug('Приключения'),
                'genre_name' => 'Приключения',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'book_genre_slug' => Str::slug('Научпоп'),
                'genre_name' => 'Научпоп',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('book_genres')->insert($data);
    }
}
