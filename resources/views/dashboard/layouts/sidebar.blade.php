<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} text-dark" aria-current="page" href="/dashboard">
                <i class="bi bi-house"></i>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <i class="bi bi-postcard"></i>
                My Posts
                </a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link text-dark">
                    <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </button>
                </form>
            </li>
        
        </ul>
    </div>