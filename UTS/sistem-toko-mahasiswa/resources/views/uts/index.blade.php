@extends('layouts.app')

@section('title', 'Halaman UTS')

@section('content')
    <h2>Halaman Utama UTS</h2>
    <p>Silakan pilih menu:</p>
    <ul>
        <li><a href="{{ route('uts.web') }}">Menu UTS Pemrograman Web</a></li>
        <li><a href="{{ route('uts.database') }}">Menu UTS Database</a></li>
    </ul>
@endsection
