<x-layout titre="DevGear - Commande confirmée" css="panier.css">

    <x-nav-panier />

    <main class="py-lg-5 container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="glass rounded-4 p-lg-5 p-4 text-center">

                    <div class="mb-4" style="font-size: 3rem;">
                        <i class="bi bi-cart-check-fill" style="color: #5cb85c;"></i>
                    </div>

                    <h1 class="h3 fw-bold mb-3" style="color: #5cb85c;">Paiement réussi !</h1>
                    <p class="muted mb-4">
                        Merci pour votre commande. Votre paiement a été traité avec succès.
                    </p>

                    <a href="{{ route('accueil') }}" class="btn btn-accent btn-lg">
                        Continuer mes achats
                    </a>

                </div>
            </div>
        </div>
    </main>

</x-layout>
