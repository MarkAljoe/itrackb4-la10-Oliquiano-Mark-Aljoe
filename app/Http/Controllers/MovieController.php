<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
private function getMovies()
{
    $movies = json_decode(file_get_contents(storage_path('app/movies.json')), true);
    return array_column($movies, null, 'id');
}

private function saveMovies(array $movies)
{
    file_put_contents(
        storage_path('app/movies.json'),
        json_encode(array_values($movies), JSON_PRETTY_PRINT)
    );
}
    /**
     * display a listing of the resource. and i update the methods
     */
    public function index(Request $request)
{
    $genre  = $request->query('genre', '');
    $rating = $request->query('rating', '');

    $movies = $this->getMovies();

    if ($genre !== '') {
        $movies = array_filter($movies, fn($m) => strtolower($m['genre']) === strtolower($genre));
    }

    if ($rating !== '') {
        $movies = array_filter($movies, fn($m) => $m['rating'] >= (float)$rating);
    }

    return view('movies.index', [
        'movies' => $movies,
        'currentGenre'  => $genre,
        'currentRating' => $rating,
    ]);
}

    /**
     * display the form for creating a new resource.
     */
    public function create()
{
    return view('movies.create');
}

    /**
     * store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'genre'  => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        $movies = $this->getMovies();
        $newId = count($movies) + 1;

        $movies[$newId] = [
            'id'     => $newId,
            'title'  => $request->input('title'),
            'genre'  => $request->input('genre'),
            'rating' => (float)$request->input('rating'),
        ];

        $this->saveMovies($movies);

        return redirect()->route('movies.index')->with('success', 'Movie added successfully!');
    }

    /**
     * display the specified resource.
     */
    public function show(string $id)
    {
        $movies = $this->getMovies();
        if (!isset($movies[$id])) {
            abort(404);
        }
        $movie = $movies[$id];
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * display the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $movies = $this->getMovies();
        $movie = $movies[1];
        return view('movies.featured', ['movie' => $movie]);
    }
// i added this method to filter the movies by genre and redirect to the index route with the genre as a query parameter

    public function filter($genre = null)
    {
    return redirect()->route('movies.index', $genre ? ['genre' => $genre] : []);
    }
}
