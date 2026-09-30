<nav class="mb-3">
    <a class="btn {{ request()->is('movies*') ? 'btn-dark' : 'btn-primary' }}"
       href="{{ route('movies.index') }}">My Movies</a> |
    <a class="btn {{ request()->is('movies/featured') ? 'btn-dark' : 'btn-primary' }}"
       href="{{ route('movies.featured') }}">Featured Movies</a>
</nav>