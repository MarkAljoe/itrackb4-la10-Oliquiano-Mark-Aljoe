<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MoviesSeeder extends Seeder
{
    public function run(): void
    {
        $scifi    = Genre::create(['name' => 'Sci-Fi']);
        $action   = Genre::create(['name' => 'Action']);
        $thriller = Genre::create(['name' => 'Thriller']);
        $comedy   = Genre::create(['name' => 'Comedy']);

        Movie::create([
            'title'        => 'Inception',
            'genre_id'     => $scifi->id,
            'release_year' => 2010,
            'is_featured'  => true,
            'rating'       => 'PG-13',
        ]);
        Movie::create([
            'title'        => 'The Dark Knight',
            'genre_id'     => $action->id,
            'release_year' => 2008,
            'is_featured'  => true,
            'rating'       => 'PG-13',
        ]);
        Movie::create([
            'title'        => 'Interstellar',
            'genre_id'     => $scifi->id,
            'release_year' => 2014,
            'is_featured'  => true,
            'rating'       => null,
        ]);
        Movie::create([
            'title'        => 'Parasite',
            'genre_id'     => $thriller->id,
            'release_year' => 2019,
            'is_featured'  => false,
            'rating'       => 'R',
        ]);
        Movie::create([
            'title'        => 'The Grand Budapest Hotel',
            'genre_id'     => $comedy->id,
            'release_year' => 2014,
            'is_featured'  => false,
            'rating'       => 'R',
        ]);
        Movie::create([
            'title'        => 'Everything Everywhere All at Once',
            'genre_id'     => $scifi->id,
            'release_year' => 2022,
            'is_featured'  => true,
            'rating'       => null,
        ]);
    }
}