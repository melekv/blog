<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog | @yield('title')</title>

        <script src="https://kit.fontawesome.com/6f77e9fc62.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <nav class="d-flex justify-content-center">
            <div class="d-flex justify-content-between width80">
                <div class="d-flex align-items-center">
                    <a href="https://www.instagram.com/klaudia_witkowska/" target="_blank"><i class="fab fa-instagram insta-icon"></i></a>
                    
                    @if (Auth::check())
                        <p>Cześć, {{ Auth::user()->name }}</p>
                    @endif
                </div>

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center font-weight-bold {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center font-weight-bold {{ Request::is('about') ? 'active' : '' }}" href="/about">O mnie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center font-weight-bold {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        @if (Auth::check())
                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/admin">Admin</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Auth::guest())
                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/login">Login</a>
                        @else
                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/logout">Logout</a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
        <header>
            <div id="cytat">
                Za dwadzieścia lat bardziej będziesz żałował tego<br>czego nie zrobiłeś, niż tego co zrobiłeś.<br>
                Więc odwiąż liny, opuść bezpieczną przystań.<br>Złap w żagle pomyślne wiatry. Podróżuj. Śnij. Odkrywaj.
                <p>~ Mark Twain<p>
            </div>
        </header>
        @yield('content')
        <footer>
            &copy <?php echo date('Y'); ?>
        </footer>
    </body>
</html>
