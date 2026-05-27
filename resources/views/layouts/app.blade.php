<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>English Learning Platform</title>
    <style>
        .navbar { background-color: #2c3e50; }
        .nav-link { color: white !important; }
        .hero-section {
            background:
                linear-gradient(90deg, rgba(13, 34, 61, .84) 0%, rgba(13, 34, 61, .48) 42%, rgba(13, 34, 61, .12) 100%),
                url('/assets/images/english-hero-banner.svg') center / cover no-repeat;
            color: white;
            min-height: 500px;
            padding: 150px 0;
            display: flex;
            align-items: center;
        }
        .card-hover { transition: 0.25s; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .content-box { background: #fff; border-radius: 12px; padding: 30px; border-left: 5px solid #0d6efd; }
        .video-frame { aspect-ratio: 16 / 9; width: 100%; border: 0; border-radius: 8px; }
        .brand-logo { width: 40px; height: 40px; }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="/assets/images/logo.svg" alt="ENG-LEARN" class="brand-logo">
                <span>ENG-LEARN</span>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Головна</a></li>
                    <li class="nav-item">
    <a class="nav-link" href="{{ route('sections.show', ['slug' => 'grammar']) }}">Граматика</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('sections.show', ['slug' => 'vocabulary']) }}">Словник</a>
</li>
                    @auth
                        @if(Auth::user()->isAdmin())
                            <li class="nav-item"><a class="nav-link" href="{{ route('lessons.index') }}">Керування уроками</a></li>
                        @endif
                    @endauth
                </ul>

                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Увійти</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Зареєструватися</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('profile') }}">Профіль</a>
                                @if(Auth::user()->isAdmin())
                                    <a class="dropdown-item" href="{{ route('lessons.create') }}">Додати урок</a>
                                @endif
                                <hr class="dropdown-divider">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Вийти</button>
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @if(session('success'))
            <div class="container mt-4">
                <div class="alert alert-success mb-0">{{ session('success') }}</div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="py-4 mt-5 bg-dark text-white text-center">
        <p class="mb-0">&copy; 2026 English Learning Platform. Освітня вебплатформа для вивчення англійської мови.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
