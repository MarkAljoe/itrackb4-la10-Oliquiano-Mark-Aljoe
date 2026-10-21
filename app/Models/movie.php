<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'genre_id',
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

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
}