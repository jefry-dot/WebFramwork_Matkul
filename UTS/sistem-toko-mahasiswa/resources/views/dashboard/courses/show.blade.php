@extends('layouts.app')

@section('title', $course->title . ' - Learning')

@section('content')
<div class="course-detail-container">
    <div class="course-header" style="background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; padding: 40px; border-radius: 15px; margin-bottom: 30px;">
        <div class="header-content">
            <div class="course-breadcrumb" style="margin-bottom: 15px;">
                <a href="{{ route('dashboard') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Dashboard</a> / 
                <span style="color: white;">{{ $course->title }}</span>
            </div>
            <h1 style="margin: 0 0 10px 0; font-size: 2.5rem;">{{ $course->title }}</h1>
            <p style="font-size: 1.2rem; opacity: 0.9; margin: 0 0 20px 0;">{{ $course->short_description }}</p>
            
            @if($enrollment)
            <div class="progress-section" style="background: rgba(255,255,255,0.2); padding: 20px; border-radius: 10px; backdrop-filter: blur(10px);">
                <div class="progress-info" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <span>Progress Belajar</span>
                    <span>{{ $enrollment->progress }}%</span>
                </div>
                <div class="progress-bar" style="width: 100%; height: 10px; background: rgba(255,255,255,0.3); border-radius: 5px;">
                    <div class="progress-fill" style="width: {{ $enrollment->progress }}%; height: 100%; background: white; border-radius: 5px;"></div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="course-content" style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        <div class="course-main">
            <div class="section" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 20px;">
                <h2 style="color: var(--secondary); margin-bottom: 20px;">Tentang Course</h2>
                <p style="line-height: 1.6; color: var(--dark);">{{ $course->description }}</p>
            </div>

            @if($course->modules->count() > 0)
            <div class="section" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <h2 style="color: var(--secondary); margin-bottom: 20px;">Modul Pembelajaran</h2>
                <div class="modules-list">
                    @foreach($course->modules as $module)
                    <div class="module-item" style="display: flex; align-items: center; padding: 15px; border: 1px solid #eee; border-radius: 8px; margin-bottom: 10px;">
                        <div class="module-icon" style="font-size: 1.5rem; margin-right: 15px;">📖</div>
                        <div class="module-content" style="flex: 1;">
                            <h4 style="margin: 0 0 5px 0; color: var(--secondary);">{{ $module->title }}</h4>
                            @if($module->description)
                            <p style="margin: 0; color: var(--dark); font-size: 0.9rem;">{{ $module->description }}</p>
                            @endif
                        </div>
                        <div class="module-duration" style="color: var(--dark); font-size: 0.9rem;">
                            {{ $module->duration_minutes }} menit
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        <div class="course-sidebar">
            <div class="sidebar-card" style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 20px;">
                <h3 style="color: var(--secondary); margin-bottom: 20px;">Informasi Course</h3>
                <div class="info-list">
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 15px;">
                        <span style="font-size: 1.2rem; margin-right: 10px;">👨‍🏫</span>
                        <div>
                            <div style="font-weight: 500;">Instruktur</div>
                            <div style="color: var(--dark);">{{ $course->instructor }}</div>
                        </div>
                    </div>
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 15px;">
                        <span style="font-size: 1.2rem; margin-right: 10px;">⏰</span>
                        <div>
                            <div style="font-weight: 500;">Durasi</div>
                            <div style="color: var(--dark);">{{ $course->duration_weeks }} minggu</div>
                        </div>
                    </div>
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 15px;">
                        <span style="font-size: 1.2rem; margin-right: 10px;">📖</span>
                        <div>
                            <div style="font-weight: 500;">Total Modul</div>
                            <div style="color: var(--dark);">{{ $course->total_lessons }} pelajaran</div>
                        </div>
                    </div>
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 15px;">
                        <span style="font-size: 1.2rem; margin-right: 10px;">🎯</span>
                        <div>
                            <div style="font-weight: 500;">Level</div>
                            <div style="color: var(--dark); text-transform: capitalize;">{{ $course->level }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-card" style="background: var(--primary); color: white; padding: 25px; border-radius: 10px; text-align: center;">
                <h3 style="margin-bottom: 15px;">Lanjutkan Belajar</h3>
                <p style="margin-bottom: 20px; opacity: 0.9;">Terus tingkatkan kemampuan Anda</p>
                <a href="#" class="btn" style="display: inline-block; background: white; color: var(--primary); padding: 12px 25px; border-radius: 6px; text-decoration: none; font-weight: 500; transition: all 0.3s;">Lanjutkan Modul</a>
            </div>
        </div>
    </div>
</div>

<style>
.course-detail-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

@media (max-width: 768px) {
    .course-content {
        grid-template-columns: 1fr !important;
    }
    
    .course-header h1 {
        font-size: 2rem !important;
    }
}
</style>
@endsection