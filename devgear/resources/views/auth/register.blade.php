<x-layout titre="DevGear - Créer un compte">

  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="glass rounded-4 p-4" style="width: 100%; max-width: 420px;">

      <a href="{{ route('accueil') }}" class="d-inline-flex align-items-center gap-1 mb-3 small" style="color: var(--muted); text-decoration: none;">
        ← Accueil
      </a>
      <h2 class="mb-4 text-center fw-semibold">Créer un compte</h2>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
          @error('nom')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hey! Ton nom d'utilisateur n'est pas bon!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
          <label for="name" class="form-label small">Nom</label>
          <input
            type="text"
            id="name"
            class="form-control"
            name="name"
            require
            value="{{ old('name') }}"
          >
        </div>

        <div class="mb-3">
          @error('email')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hey! Ton email est invalide!!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
          <label for="email" class="form-label small">Courriel</label>
          <input
            type="email"
            id="email"
            class="form-control"
            name="email"
            value="{{ old('email') }}"
            required
          >
        </div>

        <div class="mb-3">
          @error('password')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hey! Ton mot de passe est invalide!!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
          <label for="password" class="form-label small">Mot de passe</label>
          <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            require
            minlength="8"
          >
          <div class="form-text" style="color: var(--muted);">Minimum 8 caractères.</div>
        </div>

        <div class="mb-4">
          <label for="password_confirmation" class="form-label small">Confirmer le mot de passe</label>
          <input
            type="password"
            id="password_confirmation"
            class="form-control"
            name="password_confirmation"
            require
            minlength="8"
          >
        </div>

        <button type="submit" class="btn btn-accent w-100">S'inscrire</button>
      </form>

      <hr style="border-color: var(--stroke);">
      <p class="text-center mb-0 small" style="color: var(--muted);">
        Déjà un compte ?
        
        <a href="{{ route('loginForm') }}" style="color: var(--accent);">
          Se connecter
        </a>
      </p>

    </div>
  </div>

</x-layout>
