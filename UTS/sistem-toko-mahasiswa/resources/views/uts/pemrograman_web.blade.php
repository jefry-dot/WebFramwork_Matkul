@extends('layouts.app')

@section('title', 'Menu UTS Pemrograman Web')

@section('content')
    <div class="page-header">
        <h2>Menu UTS Pemrograman Web</h2>
        <p>Halaman ini khusus untuk UTS Pemrograman Web.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 2rem;">
        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid #e74c3c;">
            <div style="padding: 25px;">
                <div style="font-size: 2rem; color: #e74c3c; margin-bottom: 15px;">🌐</div>
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">HTML & CSS</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari dasar-dasar struktur web dengan HTML dan styling dengan CSS.</p>
                <ul style="color: var(--dark); margin-bottom: 20px; padding-left: 20px;">
                    <li>Struktur HTML5</li>
                    <li>CSS Flexbox & Grid</li>
                    <li>Responsive Design</li>
                </ul>
                <a href="#" style="display: inline-block; background-color: #e74c3c; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Mulai Belajar</a>
            </div>
        </div>

        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid #3498db;">
            <div style="padding: 25px;">
                <div style="font-size: 2rem; color: #3498db; margin-bottom: 15px;">⚡</div>
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">JavaScript</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari pemrograman front-end dengan JavaScript untuk membuat web yang interaktif.</p>
                <ul style="color: var(--dark); margin-bottom: 20px; padding-left: 20px;">
                    <li>DOM Manipulation</li>
                    <li>Event Handling</li>
                    <li>AJAX & APIs</li>
                </ul>
                <a href="#" style="display: inline-block; background-color: #3498db; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Mulai Belajar</a>
            </div>
        </div>

        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid #9b59b6;">
            <div style="padding: 25px;">
                <div style="font-size: 2rem; color: #9b59b6; margin-bottom: 15px;">🚀</div>
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">Framework</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari framework modern untuk pengembangan web yang efisien.</p>
                <ul style="color: var(--dark); margin-bottom: 20px; padding-left: 20px;">
                    <li>Laravel/PHP</li>
                    <li>React/JavaScript</li>
                    <li>Vue.js</li>
                </ul>
                <a href="#" style="display: inline-block; background-color: #9b59b6; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Mulai Belajar</a>
            </div>
        </div>
    </div>

    <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); padding: 30px; margin-top: 30px;">
        <h3 style="color: var(--secondary); margin-bottom: 20px;">Informasi UTS Pemrograman Web</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px; background: var(--light); border-radius: 8px;">
                <div style="font-size: 1.5rem; font-weight: bold; color: var(--primary);">90 Menit</div>
                <div style="color: var(--dark);">Durasi Ujian</div>
            </div>
            <div style="text-align: center; padding: 20px; background: var(--light); border-radius: 8px;">
                <div style="font-size: 1.5rem; font-weight: bold; color: var(--primary);">50 Soal</div>
                <div style="color: var(--dark);">Jumlah Soal</div>
            </div>
            <div style="text-align: center; padding: 20px; background: var(--light); border-radius: 8px;">
                <div style="font-size: 1.5rem; font-weight: bold; color: var(--primary);">100 Poin</div>
                <div style="color: var(--dark);">Nilai Maksimal</div>
            </div>
        </div>
    </div>
@endsection