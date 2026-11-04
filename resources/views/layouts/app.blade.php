<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
