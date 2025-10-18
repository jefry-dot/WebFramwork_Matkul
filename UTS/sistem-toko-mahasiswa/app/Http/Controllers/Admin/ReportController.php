<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $enrollmentStats = Enrollment::selectRaw('
            COUNT(*) as total,
            AVG(progress) as avg_progress,
            COUNT(CASE WHEN completed_at IS NOT NULL THEN 1 END) as completed
        ')->first();

        $courseStats = Course::withCount('enrollments')->get();

        return view('admin.reports.index', compact('enrollmentStats', 'courseStats'));
    }
}