<x-layout css="css/customs/index.css">
    <x-header/>
    <x-navbar/>
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filtrer par catégorie</h6>

                        <form action="#" method="GET">
                            <ul id="category-filters" class="shop-widget-list shop-widget-scroll">
                                @foreach ($categories as $categorie)
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" name="categories[]" @checked(in_array($categorie->id, request()->categories ?? []))
                                                value="{{ $categorie->id }}">
                                            <label>{{ $categorie->nom }}</label>
                                        </div>
                                        <span class="shop-widget-number">({{ $categorie->cartes->count() }})</span>
                                    </li>
                                @endforeach
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

                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            @if ($carte->imagePath)
                            <img src="{{ asset($carte->imagePath) }}"
                                class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500"
                                loading="lazy">

                            @else
                            <img src="{{ asset('images/produits/image-non-disponible.jpg') }}"
                                class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500"
                                loading="lazy">
                            @endif

                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                                {{$carte->nom}}
                            </h1>
                            <p class="lead">
                                {{$carte->description}}
                            </p>
                            <div class="d-grid d-md-flex justify-content-md-start mt-3 gap-2">
                                <button type="button" class="btn btn-success btn-lg me-md-2 px-4">
                                    Acheter
                                </button>
                                <button type="button" class="btn btn-outline-success btn-lg px-4">
                                    Retour
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div id="product-modal-content" class="modal-content">

            </div>
        </div>
    </div>
    <x-footer/>

    <script defer src="{{ asset('js/customs/index.js') }}"></script>
</x-layout>
