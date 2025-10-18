<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function index()
    {
        $featuredCourses = Course::where('is_active', true)
                               ->where('is_featured', true)
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Show the UTS webpage for pemrograman web.
     *
     * @return \Illuminate\Http\Response
     */
/*******  f4d45a75-203c-4916-a9e8-8d92e9a83b40  *******/                               ->get();

        $allCourses = Course::where('is_active', true)->get();

        return view('uts.index', compact('featuredCourses', 'allCourses'));
    }

    public function web()
    {
        // Cari course dengan slug 'pemrograman-web' atau ID 1 (fallback)
        $course = Course::where('slug', 'pemrograman-web')
                       ->orWhere('id', 1)
                       ->firstOrFail();
                       
        $relatedCourses = Course::where('is_active', true)
                              ->where('id', '!=', $course->id)
                              ->take(3)
                              ->get();

        return view('uts.pemrograman_web', compact('course', 'relatedCourses'));
    }

    public function database()
    {
        // Cari course dengan slug 'database-management' atau ID 2 (fallback)  
        $course = Course::where('slug', 'database-management')
                       ->orWhere('id', 2)
                       ->firstOrFail();
                       
        $relatedCourses = Course::where('is_active', true)
                              ->where('id', '!=', $course->id)
                              ->take(3)
                              ->get();

        return view('uts.database', compact('course', 'relatedCourses'));
    }
}