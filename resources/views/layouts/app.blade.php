<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <!-- Navbar content -->
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Include Bootstrap JS and other necessary scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
