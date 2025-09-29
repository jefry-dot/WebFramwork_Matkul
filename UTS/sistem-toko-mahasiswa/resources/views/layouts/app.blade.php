<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Halaman UTS</title>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>UTS Project</h1>
        <nav>
            <a href="{{ route('uts.index') }}">Home</a> |
            <a href="{{ route('uts.web') }}">Pemrograman Web</a> |
            <a href="{{ route('uts.database') }}">Database</a>
        </nav>
        <hr>
    </header>

    <!-- Body (Konten halaman) -->
    <main>
        @yield('content')
    </main>

    <hr>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} - Praktikum UTS</p>
    </footer>

</body>
</html>
