<x-layout titre="DevGear - Connexion">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="glass rounded-4 p-4" style="width: 100%; max-width: 420px;">

      <a href="{{ route('accueil') }}" class="d-inline-flex align-items-center gap-1 mb-3 small" style="color: var(--muted); text-decoration: none;">
        ← Accueil
      </a>
      <h2 class="mb-4 text-center fw-semibold">Connexion</h2>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        @error('email')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hey! Ton email est invalide!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
        <div class="mb-3">
          <label for="email" class="form-label small">Courriel</label>
          <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            value="{{ old('email') }}"
            >
        </div>

        
        @error('passowrd')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hey! Ton password est invalide!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
        <div class="mb-4">
          <label for="password" class="form-label small">Mot de passe</label>
          <input
            type="password"
            id="password"
            name="password"
            class="form-control"
          >
        </div>

        <button type="submit" class="btn btn-accent w-100">Se connecter</button>
      </form>

      <hr style="border-color: var(--stroke);">
      <p class="text-center mb-0 small" style="color: var(--muted);">
        Pas encore de compte ?
        <a href="#" style="color: var(--accent);">Créer un compte</a>
      </p>
    </div>
  </div>

</x-layout>