<?php

use Illuminate\Database\Seeder;

class PublishingfHouseSeeder extends Seeder
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
                'publishing_houses_slug' => Str::slug('Молодая гвардия'),
                'publishing_houses_name' => 'Молодая гвардия',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'publishing_houses_slug' => Str::slug('Аст'),
                'publishing_houses_name' => 'Аст',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'publishing_houses_slug' => Str::slug('Иностранка'),
                'publishing_houses_name' => 'Иностранка',
                'user_id' => (rand(1, 5)),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('book_publishing_houses')->insert($data);
    }
}
