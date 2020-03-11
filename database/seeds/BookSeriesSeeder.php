<?php

use Illuminate\Database\Seeder;

class BookSeriesSeeder extends Seeder
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
                'book_series_slug' => Str::slug('Супер серия'),
                'book_series_name' => 'Супер серия',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'book_series_slug' => Str::slug('Про малышей'),
                'book_series_name' => 'Про малышей',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'book_series_slug' => Str::slug('Старые книги'),
                'book_series_name' => 'Старые книги',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('book_series')->insert($data);
    }
}
