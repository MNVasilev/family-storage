<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Book::class, function (Faker $faker) {
    $book_title = $faker->words(5, 1);
    $book_slug = Str::slug($book_title);

    return [
        'book_slug' => $book_slug,
        'publishing_houses_id' => rand(1, 3),
        'book_title' => $book_title,
        'book_description' => $faker->text(255),
        'isbn' => $faker->creditCardNumber,
        'user_id' => rand(1, 5)
    ];
});
