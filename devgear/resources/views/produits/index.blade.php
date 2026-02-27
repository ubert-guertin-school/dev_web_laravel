<x-layout>
    <x-nav />

    <x-header :visible="!request()->recherche || !request()->categories"/>

    <!-- Filtres et recherche -->
    <section id="catalogue" class="container pb-4 pb-lg-5">
        <div class="glass rounded-4 p-3 p-lg-4 mb-4">
            <form action="{{ route('accueil') }}" method="GET">
                <div class="col-lg-7">
                    <label class="form-label small muted">Rechercher</label>
                    <input class="form-control form-control-lg" value="{{ request()->recherche }}" type="search" placeholder="Clavier, hub, ergonomie…" name="recherche">
                </div>

                <div class="col-lg-2 d-grid">
                    <button type="submit" class="btn btn-accent btn-lg">Appliquer</button>
                </div>
            </form>

            <section id="categories">
                <div class="py-4">
                    <h2 class="h4 small muted">Catégories</h2>
                    <form action="{{ route('accueil') }}" method="GET">
                        <div class="d-flex gap-2">
                            <div class="d-flex flex-column">
                                <button type="submit" class="btn btn-success">Filtrer</button>
                                <a href="{{ route('accueil') }}" class="btn btn-outline-warning">Réinitialiser</a>
                            </div>

                            <div>
                                @foreach ($categories as $categorie)
                                    <input type="checkbox" @checked($filtres->contains($categorie->id)) class="btn-check" name="categories[]" id="categorie{{ $categorie->id }}" value="{{ $categorie->id }}" autocomplete="off">
                                    <label for="categorie{{ $categorie->id }}" class="btn btn-outline-accent"></label>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <div class="col-lg-3">
                <label class="form-label small muted">Catégorie</label>
                <select class="form-select form-select-lg">
                    <option value="" selected>Toutes</option>
                    @forelse ($categories as $categorie)
                        <option value="{{ $categorie->id }}">
                            {{ $categorie->nom }}
                        </option>
                    @empty
                    @endforelse
                </select>
            </div>
        </div>

        <!-- Grille de produits -->
        <div class="row g-3 g-lg-4">

        @forelse ($produits as $produit)
            <x-produits.item :produit="$produit"/>
        @empty

        @endforelse

        </div>

    </section>

    <!-- Catégories -->
    <section id="categories" class="container pb-5">
        <div class="glass rounded-4 p-4">
        <h2 class="h4 fw-semibold mb-3">Catégories populaires</h2>
        <div class="d-flex flex-wrap gap-2">
            <a class="btn btn-outline-accent" href="#">Claviers</a>
            <a class="btn btn-outline-accent" href="#">Ergonomie</a>
            <a class="btn btn-outline-accent" href="#">Hubs</a>
            <a class="btn btn-outline-accent" href="#">Câbles</a>
            <a class="btn btn-outline-accent" href="#">Éclairage</a>
        </div>
        </div>
    </section>

    <x-produits.promos />
    <x-footer />

    <script src="{{ asset('js/index.js') }}"></script>
</x-layout>
