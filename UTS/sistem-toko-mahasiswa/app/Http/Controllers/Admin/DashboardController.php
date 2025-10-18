<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_courses' => Course::count(),
            'total_users' => User::count(),
            'total_enrollments' => Enrollment::count(),
            'active_courses' => Course::where('is_active', true)->count(),
        ];

        $recent_courses = Course::latest()->take(5)->get();
        $recent_users = User::latest()->take(5)->get();
        $popular_courses = Course::withCount('enrollments')
                                ->orderBy('enrollments_count', 'desc')
                                ->take(5)
                                ->get();

        return view('admin.dashboard.index', compact('stats', 'recent_courses', 'recent_users', 'popular_courses'));
    }
}