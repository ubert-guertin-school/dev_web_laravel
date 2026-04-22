<x-layout titre="DevGear - Mes achats" css="panier.css">

    <x-nav-panier />

    <main class="py-lg-5 container py-4">
        <h1 class="display-6 fw-bold mb-4">Mes achats</h1>

            <div class="glass rounded-4 p-lg-4 p-3 mb-4">

                {{-- Entête de la commande --}}
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <div>
                        <span class="fw-semibold">Commande #1</span>
                        <span class="muted small ms-3">15/04/2026</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        {{-- Date de livraison et état --}}
                            <span class="muted small">
                                Livraison prévue : 20/04/2026
                            </span>

                        <span class="badge rounded-pill bg-success">
                            Complétée
                        </span>
                    </div>
                </div>

                {{-- Liste des items --}}
                <table class="table align-middle mb-3">
                    <thead>
                        <tr class="muted small">
                            <th>Produit</th>
                            <th style="width:120px;">Prix unitaire</th>
                            <th style="width:80px;">Qté</th>
                            <th style="width:120px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Horloge pixel style rétro</td>
                            <td class="price">$19,99</td>
                            <td>1</td>
                            <td class="price fw-semibold">$19,99</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Totaux --}}
                <div class="d-flex justify-content-end">
                    <div style="min-width:220px;">
                        <div class="d-flex justify-content-between muted small">
                            <span>Sous-total</span>
                            <span class="price">$19,99</span>
                        </div>
                        <div class="d-flex justify-content-between muted small mt-1">
                            <span>TPS (5 %)</span>
                            <span class="price">$1,00</span>
                        </div>
                        <div class="d-flex justify-content-between muted small mt-1">
                            <span>TVQ (9,975 %)</span>
                            <span class="price">$2,09</span>
                        </div>
                        <hr class="my-2" style="border-color: rgba(255,255,255,.12);">
                        <div class="d-flex justify-content-between fw-semibold">
                            <span>Total</span>
                            <span class="price">$23,08</span>
                        </div>
                    </div>
                </div>

            </div>

            {{--
                <div class="glass rounded-4 p-lg-4 p-3 text-center muted">
                    Vous n'avez effectué aucun achat pour l'instant.
                </div>
            --}}

    </main>

</x-layout>
