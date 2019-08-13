<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'sinopsis',
        'actors',
        'director',
        'inventory'
    ];

    protected $table = 'movies';
}
