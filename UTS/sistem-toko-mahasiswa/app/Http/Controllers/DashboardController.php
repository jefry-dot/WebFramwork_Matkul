<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; // Jika menggunakan Inertia, hapus jika tidak

class DashboardController extends Controller
{
    /**
     * Display the dashboard index.
     */
    public function index()
    {
        // Data dummy courses untuk contoh
        $courses = [
            [
                'id' => 1,
                'title' => 'Pemrograman Web',
                'description' => 'Belajar HTML, CSS, JavaScript dan Framework Modern',
                'progress' => 75,
                'total_lessons' => 12,
                'completed_lessons' => 9,
                'image' => '🌐',
                'color' => 'blue',
                'instructor' => 'Dr. Ahmad Santoso',
                'duration' => '8 minggu'
            ],
            [
                'id' => 2,
                'title' => 'Database Management',
                'description' => 'Konsep database, SQL, dan normalisasi',
                'progress' => 45,
                'total_lessons' => 10,
                'completed_lessons' => 4,
                'image' => '🗃️',
                'color' => 'green',
                'instructor' => 'Prof. Sari Dewi',
                'duration' => '6 minggu'
            ],
            [
                'id' => 3,
                'title' => 'Algoritma dan Pemrograman',
                'description' => 'Dasar-dasar algoritma dan struktur data',
                'progress' => 20,
                'total_lessons' => 15,
                'completed_lessons' => 3,
                'image' => '⚡',
                'color' => 'purple',
                'instructor' => 'Dr. Budi Raharjo',
                'duration' => '10 minggu'
            ]
        ];

        $recent_activities = [
            [
                'type' => 'lesson_completed',
                'course' => 'Pemrograman Web',
                'lesson' => 'CSS Flexbox dan Grid',
                'time' => '2 jam yang lalu'
            ],
            [
                'type' => 'quiz_completed',
                'course' => 'Database Management',
                'score' => '85%',
                'time' => '1 hari yang lalu'
            ],
            [
                'type' => 'enrolled',
                'course' => 'Algoritma dan Pemrograman',
                'time' => '3 hari yang lalu'
            ]
        ];

        return view('dashboard.index', compact('courses', 'recent_activities'));
    }

    /**
     * Display course details.
     */
    public function showCourse($id)
    {
        // Logic untuk menampilkan detail course
        return view('dashboard.courses.show', ['course_id' => $id]);
    }
}