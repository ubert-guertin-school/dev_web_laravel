<x-layout>
    <x-nav />
    <x-header />


    <!-- Filtres et recherche -->
    <section id="catalogue" class="container pb-4 pb-lg-5">
        <div class="glass rounded-4 p-3 p-lg-4 mb-4">
            <div class="row g-3 align-items-end">
                <div class="col-lg-7">
                    <label class="form-label small muted">Rechercher</label>
                    <input class="form-control form-control-lg" type="search" placeholder="Clavier, hub, ergonomie…">
                </div>
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
                <div class="col-lg-2 d-grid">
                    <button class="btn btn-accent btn-lg">Appliquer</button>
                </div>
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
</x-layout>
