<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::withCount('enrollments')->latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'required|string|max:500',
            'instructor' => 'required|string|max:255',
            'duration_weeks' => 'required|integer|min:1',
            'total_lessons' => 'required|integer|min:0',
            'total_quizzes' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
            'color' => 'required|in:blue,green,purple,red,orange',
            'icon' => 'required|string',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['is_featured'] = $request->has('is_featured');

        // Handle topics array
        if ($request->has('topics')) {
            $validated['topics'] = array_filter(array_map('trim', explode(',', $request->topics)));
        }

        Course::create($validated);

        return redirect()->route('admin.courses.index')
                        ->with('success', 'Course created successfully.');
    }

    public function show(Course $course)
    {
        $course->load('modules');
        return view('admin.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'required|string|max:500',
            'instructor' => 'required|string|max:255',
            'duration_weeks' => 'required|integer|min:1',
            'total_lessons' => 'required|integer|min:0',
            'total_quizzes' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
            'color' => 'required|in:blue,green,purple,red,orange',
            'icon' => 'required|string',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['is_featured'] = $request->has('is_featured');

        // Handle topics array
        if ($request->has('topics')) {
            $validated['topics'] = array_filter(array_map('trim', explode(',', $request->topics)));
        }

        $course->update($validated);

        return redirect()->route('admin.courses.index')
                        ->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')
                        ->with('success', 'Course deleted successfully.');
    }
}