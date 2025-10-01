@extends('layouts.app')

@section('title', 'Semua Kursus')

@section('content')
<div class="courses-header">
    <div class="header-content">
        <h1>Katalog Kursus 📚</h1>
        <p>Temukan kursus yang sesuai dengan minat dan kebutuhan belajar Anda</p>
    </div>
    <div class="header-actions">
        <div class="search-box">
            <input type="text" placeholder="Cari kursus...">
            <button class="btn btn-primary">Cari</button>
        </div>
    </div>
</div>

<div class="courses-filters">
    <div class="filter-buttons">
        <button class="filter-btn active">Semua</button>
        <button class="filter-btn">Web Development</button>
        <button class="filter-btn">Database</button>
        <button class="filter-btn">Programming</button>
        <button class="filter-btn">Networking</button>
    </div>
    <div class="sort-options">
        <select class="form-select">
            <option>Urutkan berdasarkan</option>
            <option>Popularitas</option>
            <option>Rating Tertinggi</option>
            <option>Terbaru</option>
            <option>Progress</option>
        </select>
    </div>
</div>

<div class="courses-grid">
    @foreach($all_courses as $course)
    <div class="course-card">
        <div class="course-image">
            <div class="course-icon">{{ $course['image'] }}</div>
            @if($course['progress'] > 0)
            <div class="progress-overlay">
                <div class="progress-circle">
                    <span>{{ $course['progress'] }}%</span>
                </div>
            </div>
            @endif
        </div>
        
        <div class="course-content">
            <div class="course-category">{{ $course['category'] }}</div>
            <h3 class="course-title">{{ $course['title'] }}</h3>
            <p class="course-description">{{ $course['description'] }}</p>
            
            <div class="course-meta">
                <div class="meta-item">
                    <span class="meta-icon">👤</span>
                    <span>{{ $course['instructor'] }}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-icon">⏱️</span>
                    <span>{{ $course['duration'] }}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-icon">📊</span>
                    <span>{{ $course['level'] }}</span>
                </div>
            </div>
            
            <div class="course-stats">
                <div class="stat">
                    <span class="stat-value">{{ $course['students'] }}</span>
                    <span class="stat-label">Siswa</span>
                </div>
                <div class="stat">
                    <span class="stat-value">{{ $course['rating'] }}</span>
                    <span class="stat-label">⭐ Rating</span>
                </div>
            </div>
            
            @if($course['progress'] > 0)
            <div class="progress-section">
                <div class="progress-info">
                    <span>Progress: {{ $course['progress'] }}%</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ $course['progress'] }}%"></div>
                </div>
            </div>
            @endif
            
            <div class="course-actions">
                @if($course['progress'] > 0)
                    <a href="{{ route('uts.' . strtolower(str_replace(' ', '', $course['title']))) }}" class="btn btn-primary">
                        Lanjutkan Belajar
                    </a>
                @else
                    <button class="btn btn-outline">Mulai Kursus</button>
                @endif
                <button class="btn btn-icon">❤️</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
.courses-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.header-content h1 {
    color: var(--secondary);
    margin-bottom: 0.5rem;
    font-size: 2rem;
}

.header-content p {
    color: var(--dark);
    font-size: 1.1rem;
}

.search-box {
    display: flex;
    gap: 0.5rem;
}

.search-box input {
    padding: 0.75rem 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    min-width: 250px;
}

.courses-filters {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.filter-buttons {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 0.5rem 1rem;
    border: 1px solid #ddd;
    background: white;
    border-radius: 20px;
    cursor: pointer;
    transition: var(--transition);
}

.filter-btn.active,
.filter-btn:hover {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.form-select {
    padding: 0.5rem 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: white;
}

.courses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
}

.course-card {
    background: white;
    border-radius: 15px;
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: var(--transition);
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.course-image {
    position: relative;
    height: 120px;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    display: flex;
    align-items: center;
    justify-content: center;
}

.course-icon {
    font-size: 3rem;
}

.progress-overlay {
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.progress-circle {
    width: 50px;
    height: 50px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: var(--primary);
    font-size: 0.8rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.course-content {
    padding: 1.5rem;
}

.course-category {
    display: inline-block;
    background: #e3f2fd;
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 500;
    margin-bottom: 0.75rem;
}

.course-title {
    color: var(--secondary);
    margin-bottom: 0.75rem;
    font-size: 1.3rem;
}

.course-description {
    color: var(--dark);
    margin-bottom: 1rem;
    line-height: 1.5;
    font-size: 0.9rem;
}

.course-meta {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--dark);
    font-size: 0.85rem;
}

.meta-icon {
    font-size: 1rem;
}

.course-stats {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1rem;
    padding: 1rem 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}

.stat {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.stat-value {
    font-weight: bold;
    color: var(--secondary);
    font-size: 1.1rem;
}

.stat-label {
    font-size: 0.8rem;
    color: var(--dark);
}

.progress-section {
    margin-bottom: 1rem;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
    font-size: 0.85rem;
    color: var(--dark);
}

.course-actions {
    display: flex;
    gap: 0.5rem;
}

.btn-icon {
    padding: 0.5rem;
    min-width: auto;
}

/* Responsive Design */
@media (max-width: 768px) {
    .courses-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .search-box {
        width: 100%;
    }
    
    .search-box input {
        flex: 1;
        min-width: auto;
    }
    
    .courses-filters {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .courses-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection