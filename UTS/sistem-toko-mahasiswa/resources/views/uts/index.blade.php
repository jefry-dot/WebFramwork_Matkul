@extends('layouts.app')

@section('title', 'Halaman UTS')

@section('content')
    <div class="page-header">
        <h2>Halaman Utama UTS</h2>
        <p>Selamat datang di platform UTS. Silakan pilih menu yang tersedia.</p>
    </div>
    
    <div class="welcome-section">
        <div style="text-align: center; padding: 40px 20px; background: white; border-radius: 10px; box-shadow: var(--shadow); margin-bottom: 30px;">
            <h2 style="color: var(--secondary); margin-bottom: 15px;">Selamat Datang di Sistem UTS</h2>
            <p style="color: var(--dark); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px;">
                Platform ini menyediakan akses ke materi dan ujian untuk mata kuliah Pemrograman Web dan Database.
            </p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px;">
                <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: var(--shadow); text-align: center; transition: var(--transition); border: 2px solid var(--light);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;">🌐</div>
                    <h3 style="color: var(--secondary); margin-bottom: 15px;">Pemrograman Web</h3>
                    <p style="color: var(--dark); margin-bottom: 20px;">Materi dan ujian untuk mata kuliah Pemrograman Web</p>
                    <a href="{{ route('uts.web') }}" style="display: inline-block; background-color: var(--primary); color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Akses Materi</a>
                </div>
                <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: var(--shadow); text-align: center; transition: var(--transition); border: 2px solid var(--light);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;">🗃️</div>
                    <h3 style="color: var(--secondary); margin-bottom: 15px;">Database</h3>
                    <p style="color: var(--dark); margin-bottom: 20px;">Materi dan ujian untuk mata kuliah Database</p>
                    <a href="{{ route('uts.database') }}" style="display: inline-block; background-color: var(--primary); color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Akses Materi</a>
                </div>
            </div>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 2rem;">
        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid var(--primary);">
            <div style="padding: 25px;">
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">Pemrograman Web</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari konsep dasar pengembangan web dengan HTML, CSS, JavaScript, dan framework modern.</p>
                <a href="{{ route('uts.web') }}" style="display: inline-block; background-color: transparent; border: 2px solid var(--primary); color: var(--primary); padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Lihat Detail</a>
            </div>
        </div>
        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid var(--primary);">
            <div style="padding: 25px;">
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">Database</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari konsep database, SQL, normalisasi, dan implementasi database dalam aplikasi.</p>
                <a href="{{ route('uts.database') }}" style="display: inline-block; background-color: transparent; border: 2px solid var(--primary); color: var(--primary); padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Lihat Detail</a>
            </div>
        </div>
    </div>
@endsection