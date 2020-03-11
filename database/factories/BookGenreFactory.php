<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\BookGenre::class, function (Faker $faker) {
    return [
        'book_genre_slug' => $faker->slug,
        'genre_name' => $faker->lastName,
        'user_id' => (rand(1, 5))
    ];
});
