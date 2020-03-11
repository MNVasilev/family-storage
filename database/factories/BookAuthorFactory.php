<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\BookAuthor::class, function (Faker $faker) {
    $last_name = $faker->lastName;
    $first_name = $faker->firstName;
    $slug = Str::slug($last_name . ' ' . $first_name);

    return [
        'book_author_slug' => $slug,
        'last_name' => $last_name,
        'first_name' => $first_name,
        'patronymic' => 'Отчество',
        'user_id' => (rand(1, 5))
    ];
});
