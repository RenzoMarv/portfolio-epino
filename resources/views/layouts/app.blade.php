<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epino Maristela - Personal Website</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Maristela Epino</h1>
        <p>"Success is the sum of small efforts, repeated day in and day out"</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/autobiography') }}" class="nav-link {{ request()->is('autobiography') ? 'active' : '' }}">Autobiography</a>
        <a href="{{ url('/article') }}" class="nav-link {{ request()->is('article') ? 'active' : '' }}">Article</a>
        <a href="{{ url('/blog') }}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
        <a href="{{ url('/form') }}" class="nav-link {{ request()->is('form') ? 'active' : '' }}">Form</a>
    </nav>

    <!-- Main Content -->
    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Epino Maristela. All rights reserved.</p>
    </footer>

</body>
</html>
