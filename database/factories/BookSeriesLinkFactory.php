<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;

$factory->define(\App\Models\BookSeriesLink::class, function () {
    return [
        'book_id' => rand(1, 10),
        'book_series_id' => rand(1, 3),
        'user_id' => rand(1, 5)
    ];
});
