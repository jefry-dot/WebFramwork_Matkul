@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2>Buat Akun Baru</h2>
            <p>Daftar untuk mengakses platform UTS</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autofocus
                    class="form-input"
                    placeholder="Masukkan nama lengkap Anda"
                >
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    class="form-input"
                    placeholder="Masukkan email Anda"
                >
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="form-input"
                    placeholder="Buat password Anda"
                >
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    required 
                    class="form-input"
                    placeholder="Ulangi password Anda"
                >
            </div>

            <button type="submit" class="btn btn-primary btn-full">
                Daftar
            </button>
        </form>

        <div class="auth-footer">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
        </div>
    </div>
</div>

<style>
.auth-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 60vh;
    padding: 2rem 0;
}

.auth-card {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: var(--shadow);
    width: 100%;
    max-width: 400px;
}

.auth-header {
    text-align: center;
    margin-bottom: 30px;
}

.auth-header h2 {
    color: var(--secondary);
    margin-bottom: 10px;
}

.auth-header p {
    color: var(--dark);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: var(--dark);
    font-weight: 500;
}

.form-input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: var(--transition);
}

.form-input:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
}

.btn-full {
    width: 100%;
    padding: 12px;
    font-size: 1rem;
}

.auth-footer {
    text-align: center;
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.auth-footer p {
    color: var(--dark);
}

.auth-footer a {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
}

.auth-footer a:hover {
    text-decoration: underline;
}

.error-message {
    color: var(--accent);
    font-size: 0.875rem;
    margin-top: 5px;
    display: block;
}
</style>
@endsection