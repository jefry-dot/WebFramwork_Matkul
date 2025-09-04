<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman About</h1>
    <p>Ini adalah halaman about </p>

    <h3>Navigasi</h3>
     <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About (Named Route)</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ url('/greeting') }}">Greeting</a></li>
        <li><a href="{{ url('/user/123') }}">User dengan ID</a></li>
        <li><a href="{{ url('/profile') }}">Profile Guest</a></li>
        <li><a href="{{ url('/profile/Jefry') }}">Profile Jefry</a></li>
        <li><a href="{{ url('/blogs') }}">Blogs</a></li>
        <li><a href="{{ url('/manager/edit') }}">Manager Edit</a></li>
        <li><a href="{{ url('/posts') }}">Posts (Resource Index)</a></li>
    </ul>
</body>
</html>