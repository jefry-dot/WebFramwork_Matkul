@extends('layouts.app')

@section('title', 'Dashboard - My Learning')

@section('content')
<div class="dashboard-container">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-content">
            <h1>Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
            <p>Lanjutkan perjalanan belajar Anda hari ini</p>
        </div>
        <div class="welcome-stats">
            <div class="stat-card">
                <div class="stat-icon">📚</div>
                <div class="stat-info">
                    <h3>3</h3>
                    <p>Kursus Diikuti</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">✅</div>
                <div class="stat-info">
                    <h3>16</h3>
                    <p>Pelajaran Selesai</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⏱️</div>
                <div class="stat-info">
                    <h3>12h</h3>
                    <p>Waktu Belajar</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Progress Section -->
    <div class="section">
        <div class="section-header">
            <h2>Kursus Saya</h2>
            <a href="#" class="view-all">Lihat Semua</a>
        </div>
        
        <div class="courses-grid">
            @foreach($courses as $course)
            <div class="course-card">
                <div class="course-header {{ $course['color'] }}">
                    <div class="course-icon">{{ $course['image'] }}</div>
                    <h3>{{ $course['title'] }}</h3>
                </div>
                <div class="course-content">
                    <p>{{ $course['description'] }}</p>
                    
                    <div class="course-meta">
                        <span class="instructor">👨‍🏫 {{ $course['instructor'] }}</span>
                        <span class="duration">⏰ {{ $course['duration'] }}</span>
                    </div>
                    
                    <div class="progress-section">
                        <div class="progress-info">
                            <span>Progress</span>
                            <span>{{ $course['progress'] }}%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: {{ $course['progress'] }}%"></div>
                        </div>
                        <div class="lesson-progress">
                            {{ $course['completed_lessons'] }}/{{ $course['total_lessons'] }} pelajaran selesai
                        </div>
                    </div>
                    
                    {{-- Di bagian course cards, cari tombol "Lanjutkan Belajar" --}}
<div class="course-actions">
    <a href="{{ route('dashboard.courses.show', $course['id']) }}" class="btn-continue">Lanjutkan Belajar</a>
</div>  
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="activity-section">
        <div class="section-header">
            <h2>Aktivitas Terbaru</h2>
        </div>
        
        <div class="activity-list">
            @foreach($recent_activities as $activity)
            <div class="activity-item">
                <div class="activity-icon">
                    @if($activity['type'] === 'lesson_completed')
                    ✅
                    @elseif($activity['type'] === 'quiz_completed')
                    📝
                    @else
                    🎯
                    @endif
                </div>
                <div class="activity-content">
                    <p>
                        @if($activity['type'] === 'lesson_completed')
                        Menyelesaikan <strong>{{ $activity['lesson'] }}</strong> di <strong>{{ $activity['course'] }}</strong>
                        @elseif($activity['type'] === 'quiz_completed')
                        Mengikuti quiz <strong>{{ $activity['course'] }}</strong> dengan nilai <strong>{{ $activity['score'] }}</strong>
                        @else
                        Mendaftar kursus <strong>{{ $activity['course'] }}</strong>
                        @endif
                    </p>
                    <span class="activity-time">{{ $activity['time'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
.dashboard-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Welcome Section */
.welcome-section {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 40px;
    border-radius: 15px;
    margin-bottom: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.welcome-content h1 {
    font-size: 2.2rem;
    margin-bottom: 10px;
}

.welcome-content p {
    font-size: 1.1rem;
    opacity: 0.9;
}

.welcome-stats {
    display: flex;
    gap: 20px;
}

.stat-card {
    background: rgba(255, 255, 255, 0.2);
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 15px;
    backdrop-filter: blur(10px);
}

.stat-icon {
    font-size: 2rem;
}

.stat-info h3 {
    font-size: 1.8rem;
    margin: 0;
}

.stat-info p {
    margin: 0;
    opacity: 0.8;
    font-size: 0.9rem;
}

/* Section Styles */
.section {
    margin-bottom: 40px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.section-header h2 {
    color: var(--secondary);
    font-size: 1.8rem;
}

.view-all {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
}

.view-all:hover {
    text-decoration: underline;
}

/* Courses Grid */
.courses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 25px;
}

.course-card {
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: var(--transition);
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.course-header {
    color: white;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.course-header.blue {
    background: linear-gradient(135deg, #3498db, #2980b9);
}

.course-header.green {
    background: linear-gradient(135deg, #27ae60, #229954);
}

.course-header.purple {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
}

.course-icon {
    font-size: 2.5rem;
}

.course-header h3 {
    margin: 0;
    font-size: 1.4rem;
}

.course-content {
    padding: 25px;
}

.course-content p {
    color: var(--dark);
    margin-bottom: 20px;
    line-height: 1.6;
}

.course-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    font-size: 0.9rem;
    color: var(--dark);
}

.instructor, .duration {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Progress Section */
.progress-section {
    margin-bottom: 20px;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 0.9rem;
    color: var(--dark);
}

.progress-bar {
    width: 100%;
    height: 8px;
    background-color: #e0e0e0;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 8px;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    border-radius: 4px;
    transition: width 0.3s ease;
}

.lesson-progress {
    font-size: 0.8rem;
    color: #666;
    text-align: right;
}

.course-actions {
    text-align: center;
}

.btn-continue {
    display: inline-block;
    background: var(--primary);
    color: white;
    padding: 12px 25px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: var(--transition);
    width: 100%;
    text-align: center;
}

.btn-continue:hover {
    background: var(--secondary);
    transform: translateY(-2px);
}

/* Activity Section */
.activity-section {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow);
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 15px;
    border-radius: 8px;
    transition: var(--transition);
}

.activity-item:hover {
    background: #f8f9fa;
}

.activity-icon {
    font-size: 1.5rem;
    flex-shrink: 0;
}

.activity-content p {
    margin: 0 0 5px 0;
    color: var(--dark);
}

.activity-time {
    font-size: 0.8rem;
    color: #666;
}

/* Responsive Design */
@media (max-width: 768px) {
    .welcome-section {
        flex-direction: column;
        text-align: center;
    }
    
    .welcome-stats {
        flex-direction: column;
        width: 100%;
    }
    
    .courses-grid {
        grid-template-columns: 1fr;
    }
    
    .course-meta {
        flex-direction: column;
        gap: 10px;
    }
}
</style>
@endsection