@extends('layouts.app')

@section('title', 'Add Movie')

@section('content')
    <h3 class="mt-2">Add a Movie</h3>

    <form method="POST" action="{{ route('movies.store') }}" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}"
                   class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select id="genre" name="genre" class="form-select @error('genre') is-invalid @enderror">
                <option value="">-- choose --</option>
                @foreach (['Animation', 'Thriller', 'Action', 'Drama', 'Romance', 'Sci-fi'] as $g)
                    <option value="{{ $g }}" @selected(old('genre') === $g)>{{ $g }}</option>
                @endforeach
            </select>
            @error('genre')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (0 to 10)</label>
            <input type="text" id="rating" name="rating" value="{{ old('rating') }}"
                   class="form-control @error('rating') is-invalid @enderror">
            @error('rating')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Movie</button>
        <a href="{{ route('movies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection