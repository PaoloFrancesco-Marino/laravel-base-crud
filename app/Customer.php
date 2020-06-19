<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // fillables permette scrittura/modifica degli attributi
    protected $fillable = [
        'name',
        'surname',
        'age',
        'address'
    ];
}
