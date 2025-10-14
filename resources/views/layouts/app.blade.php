<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header / Navigation -->
    <header>
        <div class="container">
            <a href="/" class="logo">Company<span>Profile</span></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Company Profile. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('nav ul');

        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
        });
    </script>
</body>
</html>
