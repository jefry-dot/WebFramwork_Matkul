@extends('layouts.app')

@section('title', 'Halaman Utama UTS')

@section('content')
<div class="home-container">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Platform <span class="highlight">UTS Online</span> Terpadu</h1>
                <p class="hero-description">
                    Siap hadapi Ujian Tengah Semester dengan percaya diri. Akses materi, latihan soal, 
                    dan ujian online untuk mata kuliah Pemrograman Web dan Database di satu platform.
                </p>
                <div class="hero-actions">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-large">
                            🚀 Masuk Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn btn-primary btn-large">
                            📚 Daftar Sekarang
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-outline btn-large">
                            🔑 Login
                        </a>
                    @endauth
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Mahasiswa</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">2</div>
                        <div class="stat-label">Mata Kuliah</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Soal Latihan</div>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-card card-1">
                    <div class="card-icon">🌐</div>
                    <h4>Pemrograman Web</h4>
                    <p>HTML, CSS, JavaScript</p>
                </div>
                <div class="floating-card card-2">
                    <div class="card-icon">🗃️</div>
                    <h4>Database</h4>
                    <p>SQL, Normalisasi</p>
                </div>
                <div class="floating-card card-3">
                    <div class="card-icon">📊</div>
                    <h4>Progress Tracking</h4>
                    <p>Pantau Kemajuan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="section-header">
            <h2>Fitur Unggulan Platform</h2>
            <p>Everything you need to succeed in your exams</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>Materi Lengkap</h3>
                <p>Akses materi pembelajaran yang terstruktur dan mudah dipahami untuk persiapan UTS</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Latihan Soal</h3>
                <p>Bank soal latihan dengan berbagai tingkat kesulitan untuk mengasah kemampuan</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⏱️</div>
                <h3>Simulasi Ujian</h3>
                <p>Pengalaman ujian nyata dengan timer dan sistem penilaian otomatis</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📈</div>
                <h3>Analisis Hasil</h3>
                <p>Laporan detail performa belajar dengan rekomendasi perbaikan</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👨‍🏫</div>
                <h3>Dosen Berpengalaman</h3>
                <p>Materi disusun oleh dosen-dosen ahli di bidangnya</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Akses Mobile</h3>
                <p>Belajar kapan saja, di mana saja dengan tampilan responsive</p>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses-section">
        <div class="section-header">
            <h2>Mata Kuliah Tersedia</h2>
            <p>Pilih mata kuliah yang ingin Anda pelajari</p>
        </div>
        <div class="courses-grid">
            <div class="course-card large">
                <div class="course-header web">
                    <div class="course-badge">Populer</div>
                    <div class="course-icon">🌐</div>
                    <h3>Pemrograman Web</h3>
                    <p>Master the art of web development</p>
                </div>
                <div class="course-content">
                    <ul class="course-topics">
                        <li>✅ HTML5 & Semantic Web</li>
                        <li>✅ CSS3 & Responsive Design</li>
                        <li>✅ JavaScript Fundamentals</li>
                        <li>✅ DOM Manipulation</li>
                        <li>✅ PHP & Laravel Basics</li>
                        <li>✅ RESTful APIs</li>
                    </ul>
                    <div class="course-meta">
                        <div class="meta-item">
                            <span class="meta-icon">📖</span>
                            <span>12 Modul</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-icon">⏰</span>
                            <span>8 Minggu</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-icon">🎯</span>
                            <span>50+ Soal</span>
                        </div>
                    </div>
                    <div class="course-actions">
                        <a href="{{ route('uts.web') }}" class="btn btn-outline">Jelajahi Materi</a>
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-primary">Mulai Belajar</a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="course-card large">
                <div class="course-header database">
                    <div class="course-badge">Essential</div>
                    <div class="course-icon">🗃️</div>
                    <h3>Database Management</h3>
                    <p>Master database design and implementation</p>
                </div>
                <div class="course-content">
                    <ul class="course-topics">
                        <li>✅ Konsep Database & SQL</li>
                        <li>✅ Normalisasi & ERD</li>
                        <li>✅ Query Optimization</li>
                        <li>✅ Transaction Management</li>
                        <li>✅ NoSQL Fundamentals</li>
                        <li>✅ Database Security</li>
                    </ul>
                    <div class="course-meta">
                        <div class="meta-item">
                            <span class="meta-icon">📖</span>
                            <span>10 Modul</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-icon">⏰</span>
                            <span>6 Minggu</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-icon">🎯</span>
                            <span>40+ Soal</span>
                        </div>
                    </div>
                    <div class="course-actions">
                        <a href="{{ route('uts.database') }}" class="btn btn-outline">Jelajahi Materi</a>
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-primary">Mulai Belajar</a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Siap Hadapi UTS dengan Percaya Diri?</h2>
            <p>Bergabung dengan ratusan mahasiswa yang sudah merasakan manfaat platform kami</p>
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-light btn-large">
                    🎯 Lanjutkan Belajar
                </a>
            @else
                <div class="cta-actions">
                    <a href="{{ route('register') }}" class="btn btn-light btn-large">
                        📝 Daftar Gratis
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-large">
                        🔑 Login
                    </a>
                </div>
            @endauth
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="section-header">
            <h2>Apa Kata Mahasiswa?</h2>
            <p>Testimoni dari pengguna platform UTS kami</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <p>"Platform ini sangat membantu persiapan UTS. Materinya lengkap dan soal latihannya mirip dengan ujian sebenarnya."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">A</div>
                    <div class="author-info">
                        <h4>Ahmad Rizki</h4>
                        <p>Mahasiswa Teknik Informatika</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <p>"Sistem pembelajarannya terstruktur banget. Bisa track progress belajar dan tahu bagian mana yang perlu ditingkatkan."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">S</div>
                    <div class="author-info">
                        <h4>Sari Dewi</h4>
                        <p>Mahasiswa Sistem Informasi</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="stars">★★★★☆</div>
                    <p>"Latihan soalnya sangat membantu. Interface-nya juga user friendly dan responsive di mobile."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">B</div>
                    <div class="author-info">
                        <h4>Budi Santoso</h4>
                        <p>Mahasiswa Ilmu Komputer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.home-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Hero Section */
.hero-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 20px;
    margin-bottom: 80px;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,1000 1000,0 1000,1000"/></svg>');
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
}

.highlight {
    background: linear-gradient(45deg, #FFD700, #FFA500);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-description {
    font-size: 1.3rem;
    line-height: 1.6;
    margin-bottom: 30px;
    opacity: 0.9;
}

.hero-actions {
    display: flex;
    gap: 15px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.btn-large {
    padding: 15px 30px;
    font-size: 1.1rem;
    border-radius: 10px;
}

.hero-stats {
    display: flex;
    gap: 40px;
}

.stat {
    text-align: center;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
}

/* Hero Visual */
.hero-visual {
    position: relative;
    height: 400px;
}

.floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    text-align: center;
    min-width: 150px;
}

.card-1 {
    top: 20%;
    left: 10%;
    animation: float 3s ease-in-out infinite;
}

.card-2 {
    top: 50%;
    right: 10%;
    animation: float 3s ease-in-out infinite 1s;
}

.card-3 {
    bottom: 20%;
    left: 30%;
    animation: float 3s ease-in-out infinite 0.5s;
}

.floating-card .card-icon {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.floating-card h4 {
    margin: 0 0 5px 0;
    font-size: 1rem;
}

.floating-card p {
    margin: 0;
    font-size: 0.8rem;
    opacity: 0.8;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 2.5rem;
    color: var(--secondary);
    margin-bottom: 15px;
}

.section-header p {
    font-size: 1.2rem;
    color: var(--dark);
    max-width: 600px;
    margin: 0 auto;
}

/* Features Section */
.features-section {
    padding: 80px 0;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.feature-card {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: var(--shadow);
    text-align: center;
    transition: var(--transition);
    border: 1px solid #f0f0f0;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.feature-card h3 {
    color: var(--secondary);
    margin-bottom: 15px;
    font-size: 1.4rem;
}

.feature-card p {
    color: var(--dark);
    line-height: 1.6;
}

/* Courses Section */
.courses-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    border-radius: 20px;
    margin-bottom: 80px;
}

.courses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 40px;
}

.course-card.large {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
}

.course-card.large:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.course-header {
    color: white;
    padding: 40px 30px;
    position: relative;
}

.course-header.web {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.course-header.database {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

.course-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.2);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.course-icon {
    font-size: 3rem;
    margin-bottom: 15px;
}

.course-header h3 {
    font-size: 2rem;
    margin: 0 0 10px 0;
}

.course-header p {
    margin: 0;
    opacity: 0.9;
    font-size: 1.1rem;
}

.course-content {
    padding: 40px 30px;
}

.course-topics {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.course-topics li {
    padding: 8px 0;
    font-size: 0.95rem;
    color: var(--dark);
}

.course-meta {
    display: flex;
    justify-content: space-around;
    margin-bottom: 30px;
    padding: 20px 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--dark);
    font-weight: 500;
}

.meta-icon {
    font-size: 1.2rem;
}

.course-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.course-actions .btn {
    flex: 1;
    text-align: center;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--secondary), var(--dark));
    color: white;
    padding: 80px 0;
    border-radius: 20px;
    margin-bottom: 80px;
    text-align: center;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-light {
    background: white;
    color: var(--secondary);
}

.btn-light:hover {
    background: #f8f9fa;
    color: var(--secondary);
}

.btn-outline-light {
    border: 2px solid white;
    color: white;
    background: transparent;
}

.btn-outline-light:hover {
    background: white;
    color: var(--secondary);
}

/* Testimonials Section */
.testimonials-section {
    padding: 80px 0;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.testimonial-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: var(--transition);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.testimonial-content {
    margin-bottom: 25px;
}

.stars {
    color: #FFD700;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.testimonial-content p {
    color: var(--dark);
    line-height: 1.6;
    font-style: italic;
    margin: 0;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 15px;
}

.author-avatar {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 1.2rem;
}

.author-info h4 {
    margin: 0 0 5px 0;
    color: var(--secondary);
}

.author-info p {
    margin: 0;
    color: var(--dark);
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        justify-content: center;
    }
    
    .courses-grid {
        grid-template-columns: 1fr;
    }
    
    .course-topics {
        grid-template-columns: 1fr;
    }
    
    .course-meta {
        flex-direction: column;
        gap: 15px;
    }
    
    .course-actions {
        flex-direction: column;
    }
    
    .hero-actions, .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-large {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .home-container {
        padding: 0 15px;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .features-grid,
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection