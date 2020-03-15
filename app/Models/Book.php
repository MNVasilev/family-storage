<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public function genres()
    {
        return $this->belongsToMany('App\Models\BookGenre', 'book_genres');
    }
}
