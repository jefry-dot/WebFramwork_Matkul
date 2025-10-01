@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2>Masuk ke Akun Anda</h2>
            <p>Silakan masuk untuk mengakses platform UTS</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus
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
                    placeholder="Masukkan password Anda"
                >
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-options">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember">
                    <span>Ingat saya</span>
                </label>
                
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">
                        Lupa password?
                    </a>
                @endif
            </div>

            <button type="submit" class="btn btn-primary btn-full">
                Masuk
            </button>
        </form>

        <div class="auth-footer">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
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

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
    gap: 10px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--dark);
    cursor: pointer;
}

.checkbox-label input[type="checkbox"] {
    width: 16px;
    height: 16px;
}

.forgot-password {
    color: var(--primary);
    text-decoration: none;
    font-size: 0.9rem;
}

.forgot-password:hover {
    text-decoration: underline;
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