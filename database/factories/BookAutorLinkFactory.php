<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\BookAuthorsLink::class, function () {
    return [
        'book_id' => rand(1, 10),
        'book_author_id' => rand(1, 10),
        'user_id' => rand(1, 5)
    ];
});
