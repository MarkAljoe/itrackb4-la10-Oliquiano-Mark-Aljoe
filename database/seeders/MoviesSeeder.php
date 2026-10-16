<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'title'        => 'Inception',
            'genre'        => 'Sci-Fi',
            'release_year' => 2010,
            'is_featured'  => true,
            'rating'       => 'PG-13',
        ]);
        Movie::create([
            'title'        => 'The Dark Knight',
            'genre'        => 'Action',
            'release_year' => 2008,
            'is_featured'  => true,
            'rating'       => 'PG-13',
        ]);
        Movie::create([
            'title'        => 'Interstellar',
            'genre'        => 'Sci-Fi',
            'release_year' => 2014,
            'is_featured'  => true,
            'rating'       => null,
        ]);
        Movie::create([
            'title'        => 'Parasite',
            'genre'        => 'Thriller',
            'release_year' => 2019,
            'is_featured'  => false,
            'rating'       => 'R',
        ]);
        Movie::create([
            'title'        => 'The Grand Budapest Hotel',
            'genre'        => 'Comedy',
            'release_year' => 2014,
            'is_featured'  => false,
            'rating'       => 'R',
        ]);
        Movie::create([
            'title'        => 'Everything Everywhere All at Once',
            'genre'        => 'Sci-Fi',
            'release_year' => 2022,
            'is_featured'  => true,
            'rating'       => null,
        ]);
    }
}