<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard', ['username' => request('username')]) }}">OctaffeeDashboard</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="{{ route('dashboard', ['username' => request('username')]) }}">Dashboard</a>
            <a class="nav-link" href="{{ route('pengelolaan', ['username' => request('username')]) }}">Menu</a>
            <a class="nav-link" href="{{ route('profile', ['username' => request('username')]) }}">Profile</a>
            <a class="nav-link text-danger" href="{{ route('login') }}">Logout</a>
        </div>
    </div>
</nav>