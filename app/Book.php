<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // fillables permette scrittura/modifica degli attributi
    protected $fillable = [
        'title',
        'author',
        'editor',
        'genre',
        'description',
        'pages'
    ];
}
