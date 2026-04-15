<x-layout titre="DevGear - Paiement annulé" css="panier.css">

    <x-nav-panier />

    <main class="py-lg-5 container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="glass rounded-4 p-lg-5 p-4 text-center">

                    <div class="mb-4" style="font-size: 3rem;">❌</div>

                    <h1 class="h3 fw-bold mb-3">Paiement non complété</h1>
                    <p class="muted mb-4">
                        Votre paiement n'a pas été effectué. Aucun montant n'a été débité de votre carte.
                    </p>

                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('checkout') }}" class="btn btn-accent">
                            Réessayer
                        </a>
                        <a href="{{ route('panier') }}" class="btn btn-outline-accent">
                            Retour au panier
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </main>

</x-layout>
