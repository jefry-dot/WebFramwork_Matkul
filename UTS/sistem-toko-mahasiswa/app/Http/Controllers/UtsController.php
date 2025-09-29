<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtsController extends Controller
{
    // Menampilkan halaman utama uts
    public function index()
    {
        return view('uts.index'); // akan kita buat nanti
    }

    // Menampilkan menu pemrograman web
    public function pemrogramanWeb()
    {
        return view('uts.pemrograman_web');
    }

    // Menampilkan menu database
    public function database()
    {
        return view('uts.database');
    }
}
