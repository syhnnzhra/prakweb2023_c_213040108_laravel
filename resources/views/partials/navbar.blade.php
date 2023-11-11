<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">Syahnan's Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($active === 'Home') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }}" href="/blog">Blog</a>
                <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </div>
        </div>

        <ul class="navbar-nav ms-auto">
        @auth
            <li class="nav-item">
                <a class="nav-link " href="/dashboard"> <i class="bi bi-layout-text-sidebar"></i> My Dashboard</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'login') ? 'active' : '' }}" href="/login"> <i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        @endauth
        </ul>
        </div>
    </nav>