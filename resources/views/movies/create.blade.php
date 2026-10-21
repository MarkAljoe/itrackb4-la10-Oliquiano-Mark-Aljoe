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
            <label for="genre_id" class="form-label">Genre</label>
            <select id="genre_id" name="genre_id" class="form-select @error('genre_id') is-invalid @enderror">
                <option value="">-- choose --</option>
                @foreach ($genres as $g)
                    <option value="{{ $g->id }}"
                        @selected(old('genre_id') == $g->id)
                    >{{ $g->name }}</option>
                @endforeach
            </select>
            @error('genre_id')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="number" id="release_year" name="release_year" value="{{ old('release_year') }}"
                   class="form-control @error('release_year') is-invalid @enderror">
            @error('release_year')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Featured?</label>
            <select name="is_featured" class="form-select @error('is_featured') is-invalid @enderror">
                <option value="">-- choose --</option>
                <option value="1" @selected(old('is_featured') == '1')>Yes</option>
                <option value="0" @selected(old('is_featured') == '0')>No</option>
            </select>
            @error('is_featured')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (e.g. PG, PG-13, R)</label>
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