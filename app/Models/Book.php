<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_slug',
        'book_title',
        'book_description',
        'isbn',
        'user_id'
    ];

    public function genres()
    {
        return $this->belongsToMany('App\Models\BookGenre', 'book_genres');
    }
}
