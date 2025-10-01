<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - UTS Project</title>
    
    <!-- Styles -->
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2c3e50;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #34495e;
            --success: #2ecc71;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem 0;
            box-shadow: var(--shadow);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            font-size: 1.8rem;
        }

        .logo h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 4px;
            transition: var(--transition);
            position: relative;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        nav a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: var(--transition);
        }

        nav a:hover::after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
            margin-left: 20px;
        }

        .btn-login {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-login:hover {
            background-color: white;
            color: var(--primary);
        }

        .btn-daftar {
            background-color: white;
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-daftar:hover {
            background-color: var(--light);
            transform: translateY(-2px);
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: 20px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-weight: bold;
        }

        .user-name {
            color: white;
            font-weight: 500;
        }

        .logout-form {
            display: inline;
        }

        .btn-logout {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 6px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
            font-size: 0.9rem;
        }

        .btn-logout:hover {
            background-color: white;
            color: var(--accent);
        }

        /* Main Content Styles */
        main {
            flex: 1;
            padding: 2rem 0;
        }

        .page-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .page-header h2 {
            font-size: 2.2rem;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .page-header p {
            color: var(--dark);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .page-header::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary);
            margin: 15px auto;
            border-radius: 2px;
        }

        /* Footer Styles */
        footer {
            background-color: var(--secondary);
            color: white;
            padding: 2rem 0;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .copyright {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
        }

        /* Card Styles */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 2rem;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
            border-top: 4px solid var(--primary);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-content {
            padding: 25px;
        }

        .card h3 {
            color: var(--secondary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .card p {
            color: var(--dark);
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Alert Styles */
        .alert {
            padding: 15px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: var(--success);
            color: #155724;
        }

        .alert-error {
            background-color: #f8d7da;
            border-color: var(--accent);
            color: #721c24;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            nav {
                flex-direction: column;
                width: 100%;
            }
            
            nav ul {
                gap: 10px;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .auth-buttons, .user-menu {
                margin-left: 0;
                margin-top: 10px;
            }
            
            .user-menu {
                flex-direction: column;
                gap: 10px;
            }
            
            .page-header h2 {
                font-size: 1.8rem;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">📚</div>
                    <h1>UTS Project</h1>
                </div>
 <nav>
    <ul>
        <li><a href="{{ route('uts.index') }}" class="{{ request()->routeIs('uts.index') ? 'active' : '' }}">Home</a></li>
        
        @auth
            <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
        @endauth
        
        <li><a href="{{ route('uts.web') }}" class="{{ request()->routeIs('uts.web') ? 'active' : '' }}">Pemrograman Web</a></li>
        <li><a href="{{ route('uts.database') }}" class="{{ request()->routeIs('uts.database') ? 'active' : '' }}">Database</a></li>
    </ul>
    
    <!-- Authentication Links -->
    @auth
        <div class="user-menu">
            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <span class="user-name">{{ Auth::user()->name }}</span>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    @else
        <div class="auth-buttons">
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn-daftar">Daftar</a>
        </div>
    @endauth
</nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <!-- Alert Messages -->
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            @if($errors->any())
                <div class="alert alert-error">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>UTS Project</h3>
                    <p>Platform Ujian Online Terpercaya</p>
                </div>
                <div class="footer-links">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                    <a href="#">Bantuan</a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} - Praktikum UTS. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>