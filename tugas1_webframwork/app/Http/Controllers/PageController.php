<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Basic route
    public function greeting()
    {
        return "Hello World";
    }

    // Parameter
    public function user($id)
    {
        return "User ID: " . $id;
    }

    // Parameter opsional
    public function profile($name = "Guest")
    {
        return "Hello, " . $name;
    }

    // About page (pakai Blade)
    public function about()
    {
        return view('about');
    }

    // Contact (string sederhana)
    public function contact()
    {
        return "Ini halaman Contact";
    }

    // Resource Posts (manual)
    public function posts()
    {
        return "Daftar semua post (Index)";
    }
}
