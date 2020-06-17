<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // fillables permette scrittura/modifica degli attributi
    protected $fillables = [
        'title',
        'author',
        'editor',
        'genre',
        'description',
        'pages'
    ];
}
