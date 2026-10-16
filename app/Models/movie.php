<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'release_year',
        'is_featured',
        'rating',
    ];

    protected function casts(): array
    {
        return [
            'is_featured'  => 'boolean',
            'release_year' => 'integer',
        ];
    }
}