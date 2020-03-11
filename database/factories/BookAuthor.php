<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\BookAuthor::class, function (Faker $faker) {
    return [
        'book_author_slug' => $faker->slug,
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'patronymic' => 'Отчество',
        'user_id' => (rand(1, 5))
    ];
});
