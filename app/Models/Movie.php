<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'movie_url',
        'thumbnail',
        'description',
        'language',
        'year',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;
}
