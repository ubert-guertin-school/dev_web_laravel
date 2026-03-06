<nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar">
    <div class="container py-2">
        <a class="navbar-brand fw-semibold" href="{{ route('accueil') }}">
            <span class="brand-dot">DevGear</span>
        </a>

    <div class="d-flex gap-2">
        <a href="" class="btn btn-outline-accent"></a>
        <a class="btn btn-outline-accent position-relative" href="{{ route('panier') }}">Panier
            <span class="position-absolute start-100 translate-middle badge rounded-pill text-bg-light top-0">{{ count(session("panier")) }}</span>
        </a>
    </div>
</nav>
