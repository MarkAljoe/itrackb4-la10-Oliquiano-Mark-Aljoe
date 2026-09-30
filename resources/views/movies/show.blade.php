@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
    <h3 class="mt-2">{{ $movie['title'] }}</h3>


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