<x-layout titre="index" css="'css/customs/index.css'">
    <a class="backtop fas fa-arrow-up" href="#"></a>

    <x-header />

    <x-navbar />

    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filtrer par catégorie</h6>
                        <form method="GET" action="{{ route('produits.index') }}">
                            <ul id="category-filters" class="shop-widget-list shop-widget-scroll">

                                @forelse ($categories as $categorie)
                                    <li>
                                        <div class="shop-widget-content">
                                            <input
                                                type="checkbox"
                                                name="categories[]"
                                                value="{{ $categorie->id }}"
                                                @checked($filtres->contains($categorie->id))
                                            >

                                            <label>{{ $categorie->nom }}</label>
                                        </div>
                                        <span class="shop-widget-number">({{ $categorie->cartes->count() }})</span>
                                    </li>
                                @empty
                                    <li>Aucune carte ne correspond à vos critères de recherche.</li>
                                @endforelse
                            </ul>
                            <button type="submit" class="shop-widget-btn mb-2">
                                <i class="fa fa-filter" aria-hidden="true"></i>
                                <span>Filtrer</span>
                            </button>
                            <a class="shop-widget-btn" href="/">
                                <i class="far fa-trash-alt"></i>
                                <span>Réinitialiser</span>
                            </a>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filtrer par prix</h6>
                        <form>
                            <div class="shop-widget-group">

                                <input type="text" placeholder="Min - 00">
                                <input type="text" placeholder="Max - 5000">
                            </div>
                            <button class="shop-widget-btn">
                                <i class="fas fa-search"></i>
                                <span>Chercher</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">

                    <!-- <div class="row row-cols-12 row-cols-md-12 row-cols-lg-12 row-cols-xl-12">
                                    <div class="no-result-card">
                                        Aucun produit ne correspond à vos critères de recherche.
                                    </div>
                                </div> -->

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">
                        <!-- Produits -->
                        @foreach ($cartes as $carte)
                            <div class="col">
                                <div class="product-card">
                                    <div class="product-media">
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>

                                        <a class="product-image" href="#">

                                            @if ($carte->imagePath)
                                                <img src="{{ asset($carte->imagePath) }}" alt="product">
                                            @else
                                                <img src="{{ asset('images/produits/image-non-disponible.jpg') }}"
                                                    alt="product">
                                            @endif


                                        </a>

                                        <div class="product-widget">
                                            <a title="Voir détail" href="{{ route('showAjax', ["id" => $carte->id] ) }}" class="fas fa-eye product-view"
                                                data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6 class="product-name">
                                            <a
                                                href="{{ route('carte.show', ['id' => $carte->id]) }}">{{ $carte->nom }}</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>{{ $carte->prix }}
                                                $<small>/unité</small>
                                            </span>
                                        </h6>

                                        <form method="POST" action="#">

                                            <button type="submit" class="product-add" title="Ajouter au panier">
                                                <i class="fas fa-shopping-basket"></i>
                                                <span>Ajouter</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modale --}}
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div id="product-modal-content" class="modal-content">

            </div>
        </div>
    </div>

    <x-footer />

    <script defer src="{{ asset('js/customs/index.js') }}"></script>
</x-layout>
