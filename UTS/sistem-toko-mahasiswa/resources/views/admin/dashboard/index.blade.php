@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="page-header">
    <h1>Dashboard Overview</h1>
</div>

<!-- Stats Grid -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-value">{{ $stats['total_courses'] }}</div>
        <div class="stat-label">Total Courses</div>
    </div>
    <div class="stat-card success">
        <div class="stat-value">{{ $stats['total_users'] }}</div>
        <div class="stat-label">Total Users</div>
    </div>
    <div class="stat-card warning">
        <div class="stat-value">{{ $stats['total_enrollments'] }}</div>
        <div class="stat-label">Total Enrollments</div>
    </div>
    <div class="stat-card danger">
        <div class="stat-value">{{ $stats['active_courses'] }}</div>
        <div class="stat-label">Active Courses</div>
    </div>
</div>

<div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 30px;">
    <!-- Recent Courses -->
    <div class="table-container">
        <div class="table-header">
            <h3>Recent Courses</h3>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Add New Course</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Instructor</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent_courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->instructor }}</td>
                    <td>
                        @if($course->is_active)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-outline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Popular Courses -->
    <div class="table-container">
        <div class="table-header">
            <h3>Popular Courses</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Enrollments</th>
                    <th>Progress</th>
                </tr>
            </thead>
            <tbody>
                @foreach($popular_courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->enrollments_count }}</td>
                    <td>
                        <div style="background: #e0e0e0; border-radius: 10px; height: 8px; width: 100%;">
                            <div style="background: var(--primary); height: 100%; border-radius: 10px; width: {{ rand(30, 90) }}%;"></div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection