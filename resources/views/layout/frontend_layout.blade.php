<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('ui/style.css') }}">
</head>

<body>
    <nav>
        @include('elements.frontend_header')
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>