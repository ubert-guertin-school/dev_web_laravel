  <!-- Navbar -->
  <nav class="navbar">
      <div class="container py-2">
          <a class="navbar-brand fw-semibold text-light" href="{{ route('accueil') }}">
              <span class="brand-dot"></span>DevGear
          </a>

          <div class="d-flex gap-2">
              <a class="btn btn-outline-accent" href="{{ route('accueil') }}">← Continuer mes achats</a>
              <a class="btn btn-accent position-relative" href="{{ route('panier') }}">
                  Panier
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-light">{{ count(session('panier')) }}</span>
              </a>
          </div>
      </div>
  </nav>
