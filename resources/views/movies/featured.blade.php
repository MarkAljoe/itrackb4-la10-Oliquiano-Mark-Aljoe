@extends('layouts.app')

@section('title', 'Featured Movie')

@section('content')
    <h3 class="mt-2">Featured Movie</h3>

    <h4>{{ $movie['title'] }}</h4>

    <table class="table table-striped table-bordered mt-2">
        <tr>
            <th>Genre</th>
            <td>{{ $movie['genre'] }}</td>
        </tr>
        <tr>
            <th>Rating</th>
            <td>{{ $movie['rating'] }}</td>
        </tr>
    </table>

    <a href="{{ route('movies.index') }}" class="btn btn-secondary btn-sm">Back to list</a>
@endsection
