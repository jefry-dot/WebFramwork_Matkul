<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
        }
        nav {
            background: #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten --}}
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
