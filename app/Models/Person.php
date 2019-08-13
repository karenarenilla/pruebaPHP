<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property name string
 * @property document string
 */
class Person extends Model
{
    protected $fillable = [
        'name',
        'document'
    ];

    protected $table = 'persons';
}
