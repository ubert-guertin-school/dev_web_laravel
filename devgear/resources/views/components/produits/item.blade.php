@props(['produit'])
@if ($produit->disponible)
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card glass product-card rounded-4 h-100">
            <div class="card-body">
                <img class="thumb w-100 mb-3" src="{{ asset($produit->image_path) }}" alt="{{ $produit->nom }}">
                <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                        <h5 class="card-title mb-1">{{ $produit->nom }}</h5>
                        <p class="small muted mb-2">{{ $produit->categorie->nom }}</p>
                    </div>
                    @if ($produit->quantite > 0)
                        <span class="badge text-bg-dark border" style="border-color: rgba(255,255,255,.12)!important;">En
                            stock</span>
                    @else
                        <span class="badge text-bg-dark border"
                            style="border-color: rgba(210, 4, 45,.12)!important;">Rupture de stock</span>
                    @endif

                </div>
                <p class="card-text small muted">
                    {{ $produit->description }}
                </p>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="price fw-semibold fs-5">{{ $produit->prix }} $</div>
                    <div class="d-flex gap-2">
                        <a class="btn btn-outline-accent btn-details" href="{{ route('produits.show', $produit->id) }}"
                            data-bs-toggle="modal" data-bs-target="#productModal">
                            Détails
                        </a>
                        <form action="{{ route('panier.ajouter') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $produit->id }}">
                            <input class="btn btn-accent" type="submit" name="submit" value="Ajouter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
@endif
