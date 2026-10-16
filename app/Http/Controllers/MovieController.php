<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
{
    $movies = Movie::all();
    $currentGenre = null;
    $currentRating = null;
    return view('movies.index', compact('movies', 'currentGenre', 'currentRating'));
}

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}