@extends('layouts.app')

@section('title', 'Menu UTS Database')

@section('content')
    <div class="page-header">
        <h2>Menu UTS Database</h2>
        <p>Halaman ini khusus untuk UTS Database.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 2rem;">
        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid #27ae60;">
            <div style="padding: 25px;">
                <div style="font-size: 2rem; color: #27ae60; margin-bottom: 15px;">🗄️</div>
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">SQL Dasar</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari dasar-dasar Structured Query Language untuk mengelola database.</p>
                <ul style="color: var(--dark); margin-bottom: 20px; padding-left: 20px;">
                    <li>SELECT, INSERT, UPDATE</li>
                    <li>WHERE Clause</li>
                    <li>JOIN Operations</li>
                </ul>
                <a href="#" style="display: inline-block; background-color: #27ae60; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Mulai Belajar</a>
            </div>
        </div>

        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid #f39c12;">
            <div style="padding: 25px;">
                <div style="font-size: 2rem; color: #f39c12; margin-bottom: 15px;">📊</div>
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">Database Design</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari konsep perancangan database yang efisien dan normalisasi.</p>
                <ul style="color: var(--dark); margin-bottom: 20px; padding-left: 20px;">
                    <li>Entity Relationship</li>
                    <li>Normalisasi</li>
                    <li>Indexing</li>
                </ul>
                <a href="#" style="display: inline-block; background-color: #f39c12; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Mulai Belajar</a>
            </div>
        </div>

        <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); overflow: hidden; transition: var(--transition); border-top: 4px solid #8e44ad;">
            <div style="padding: 25px;">
                <div style="font-size: 2rem; color: #8e44ad; margin-bottom: 15px;">🔗</div>
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 1.4rem;">Advanced SQL</h3>
                <p style="color: var(--dark); margin-bottom: 20px;">Pelajari fitur-fitur lanjutan SQL untuk query yang lebih kompleks.</p>
                <ul style="color: var(--dark); margin-bottom: 20px; padding-left: 20px;">
                    <li>Subqueries</li>
                    <li>Stored Procedures</li>
                    <li>Transaction Management</li>
                </ul>
                <a href="#" style="display: inline-block; background-color: #8e44ad; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; transition: var(--transition);">Mulai Belajar</a>
            </div>
        </div>
    </div>

    <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); padding: 30px; margin-top: 30px;">
        <h3 style="color: var(--secondary); margin-bottom: 20px;">Informasi UTS Database</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px; background: var(--light); border-radius: 8px;">
                <div style="font-size: 1.5rem; font-weight: bold; color: var(--primary);">120 Menit</div>
                <div style="color: var(--dark);">Durasi Ujian</div>
            </div>
            <div style="text-align: center; padding: 20px; background: var(--light); border-radius: 8px;">
                <div style="font-size: 1.5rem; font-weight: bold; color: var(--primary);">40 Soal</div>
                <div style="color: var(--dark);">Jumlah Soal</div>
            </div>
            <div style="text-align: center; padding: 20px; background: var(--light); border-radius: 8px;">
                <div style="font-size: 1.5rem; font-weight: bold; color: var(--primary);">100 Poin</div>
                <div style="color: var(--dark);">Nilai Maksimal</div>
            </div>
        </div>
        
        <div style="margin-top: 25px; padding: 20px; background: #e8f4fd; border-radius: 8px; border-left: 4px solid var(--primary);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Tips Sukses UTS Database:</h4>
            <ul style="color: var(--dark); padding-left: 20px;">
                <li>Pahami konsep normalisasi dengan baik</li>
                <li>Latihan membuat query SQL yang kompleks</li>
                <li>Pelajari berbagai jenis JOIN dalam SQL</li>
                <li>Pahami transaction dan konsep ACID</li>
            </ul>
        </div>
    </div>
@endsection