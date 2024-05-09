<header class="bg-success-subtle">
    <nav class="container nav justify-content-between align-items-center py-3">
        <h1>
            <a class="navbar-brand px-3 bg-info-subtle rounded-4 text-primary" href="/">LARAVEL-MOVIE-DB</a>
        </h1>
        <div class="d-flex">
            <a class="nav-link {{ Route::currentRouteName() === 'guests.home' ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ Route::currentRouteName() === 'guests.home' ? 'active' : '' }}"
                href="{{ route('guests.about') }}">About
                us</a>
        </div>
    </nav>
</header>
