<x-layout>
    <x-navbar />
    
    @if (session('succes'))
        <div class="alert alert-success" role="alert">
            {{ session('succes') }}
        </div>
    @endif
    
    <x-header :visible="!request()->has('recherche') || !request()->has('categories')" />
    <!-- Filtres et recherche -->
    <section id="catalogue" class="container pb-4 pb-lg-5">
        <div class="glass rounded-4 p-3 p-lg-4 mb-4">
            <form action="{{ route('accueil') }}" method="GET" class="row g-3 align-items-end">
                <div class="col-lg-10">

                    <label class="form-label small muted">Rechercher</label>
                    <input class="form-control form-control-lg" type="search" placeholder="Clavier, hub, ergonomie…"
                        name="recherche" value="{{ request()->recherche }}">

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
                                <button type="submit" class="btn btn-success">
                                    Filtrer
                                </button>
                                <a href="{{ route('accueil') }}" class="btn btn-outline-warning">
                                    Réinitialiser
                                </a>
                            </div>
                            <div>
                                @foreach ($categories as $categorie)
                                    <input type="checkbox" class="btn-check" name="categories[]"
                                        id="categorie{{ $categorie->id }}" value="{{ $categorie->id }}"
                                        autocomplete="off" @checked($filtres->contains($categorie->id))>
                                    <label for="categorie{{ $categorie->id }}"
                                        class="btn btn-outline-accent">{{ $categorie->nom }}</label>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <!-- Grille de produits -->
        <div class="row g-3 g-lg-4">
            <!-- Produit 1 -->
            @foreach ($produits as $produit)
                <x-produits.item :produit="$produit"></x-produits.item>
            @endforeach
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

    <x-produits.promotions />
    <x-footer />
    <script src="{{ asset('js/index.js') }}"></script>
</x-layout>
