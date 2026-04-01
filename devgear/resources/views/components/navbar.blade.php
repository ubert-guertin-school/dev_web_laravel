<nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar">
    <div class="container py-2">
        <a class="navbar-brand fw-semibold" href="{{ route('accueil') }}">
            <span class="brand-dot"></span>DevGear
        </a>

        <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="nav">
            <ul class="navbar-nav gap-lg-2 align-items-lg-center ms-auto">
                <li class="nav-item"><a class="nav-link text-muted" href="#catalogue">Catalogue</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#categories">Catégories</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#promo">Promotions</a></li>
                
                @guest
                    <li class="nav-item ms-lg-1">
                        <a class="btn btn-outline-accent position-relative" href="{{ route('registerForm') }}">
                            Inscription
                        </a>    
                    </li>
                @endguest
                
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-outline-accent position-relative" href="{{ route('panier') }}">
                        Panier
                        <span
                            class="position-absolute start-100 translate-middle badge rounded-pill text-bg-light top-0">
                            {{ session()->has('panier') ? count(session('panier')) : 0 }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
