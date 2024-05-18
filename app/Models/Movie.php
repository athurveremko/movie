<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'year',
        'country',
        'genre',
        'director',
        'status',
        'seasons',
        'rating',
        'review',
        'photo', 
        'user_id',
    ];
}
