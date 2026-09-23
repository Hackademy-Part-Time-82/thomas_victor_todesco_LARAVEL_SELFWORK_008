<nav class="navbar navbar-expand-lg navbar-lumen sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="{{ route('homepage') }}">
            <svg class="brand-mark" viewBox="0 0 32 32" aria-hidden="true">
                <rect x="4" y="6" width="8" height="20" rx="1" fill="#b8894a" />
                <rect x="13" y="4" width="8" height="22" rx="1" fill="#f4efe6" />
                <rect x="22" y="8" width="6" height="18" rx="1" fill="#d4b483" />
            </svg>
            Biblioteca Lumen
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLumen"
            aria-controls="navbarLumen" aria-expanded="false" aria-label="Apri il menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLumen">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}"
                        href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books') ? 'active' : '' }}"
                        href="{{ route('books') }}">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('register_your_book') ? 'active' : '' }}"
                        href="{{ route('register_your_book') }}">Registra un libro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
