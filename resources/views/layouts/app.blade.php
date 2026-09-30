<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Movies App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>My Movies</h1>
    <p>Prepared by: Mark Aljoe D. Oliquiano</p>
    @include('partials._nav')

@if (session('success'))
    <div class="alert alert-success mt-2">{{ session('success') }}</div>
@endif
    @yield('content')
</body>
</html>