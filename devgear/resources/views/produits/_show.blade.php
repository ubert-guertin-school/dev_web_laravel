<div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $produit->nom }}</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="d-flex gap-3">
        <img class="thumb" src="{{ asset($produit->image_path) }}" alt="{{ $produit->nom }}" style="width: 220px;">
        <div>
            <p class="muted small mb-3">
                {{ $produit->description }}
            </p>
            <div class="price fw-semibold fs-4 mb-3">{{ $produit->prix }} $</div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-accent ms-2" data-bs-dismiss="modal">Continuer</button>
    <button type="button" class="btn btn-accent">Ajouter au panier</button>
</div>
