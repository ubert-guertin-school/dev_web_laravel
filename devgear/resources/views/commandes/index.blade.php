<x-layout titre="DevGear - Paiement" css="panier.css">

    {{-- <x-panier.nav /> --}}

    <main class="py-lg-5 container py-4">
        <div class="mb-4">
            <h1 class="display-6 fw-bold mb-1">Paiement</h1>
            <p class="muted mb-0">Vérifiez votre commande et entrez vos informations de paiement.</p>
        </div>

        <div class="row g-4">

            {{-- Formulaire de paiement Stripe --}}
            <div class="col-lg-7">
                <div class="glass rounded-4 p-lg-4 p-3">
                    <h2 class="h5 fw-semibold mb-4">Informations de paiement</h2>

                    <form id="payment-form" method="POST">
                        <div class="mb-4">
                            <label class="form-label muted small">Numéro de carte</label>
                            {{-- Stripe.js injecte son iframe sécurisé ici --}}
                            <div id="card-element"
                                 style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.12);
                                        border-radius:.375rem; padding:.75rem 1rem;">
                            </div>
                            {{-- Messages d'erreur de carte (frappe invalide, refus, etc.) --}}
                            <div id="card-errors" class="text-danger small mt-2" role="alert"></div>
                        </div>

                        <button id="submit-btn" type="submit" class="btn btn-accent btn-lg w-100">
                            Payer ${{ $total }}
                        </button>
                    </form>
                </div>
            </div>

            {{-- Récapitulatif de la commande --}}
            <div class="col-lg-5">
                <div class="glass rounded-4 p-lg-4 p-3">
                    <h2 class="h5 fw-semibold mb-3">Récapitulatif</h2>

                    @foreach ($items as $item)
                        <div class="d-flex justify-content-between muted mb-2">
                            <span>
                                {{ $item['produit']->nom }}
                                <span class="small opacity-75">× {{ $item['quantite'] }}</span>
                            </span>
                            <span class="price">${{ number_format($item['totalProduit'], 2, ",") }}</span>
                        </div>
                    @endforeach

                    <hr class="my-3" style="border-color: rgba(255,255,255,.12);">

                    <div class="d-flex justify-content-between muted">
                        <span>Sous-total</span>
                        <span class="price">${{ number_format($sousTotal, 2, ",") }}</span>
                    </div>
                    <div class="d-flex justify-content-between muted mt-2">
                        <span>TPS (5 %)</span>
                        <span class="price">${{ $totalTPS }}</span>
                    </div>
                    <div class="d-flex justify-content-between muted mt-2">
                        <span>TVQ (9,975 %)</span>
                        <span class="price">${{ $totalTVQ }}</span>
                    </div>
                    <hr class="my-3" style="border-color: rgba(255,255,255,.12);">

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Total</span>
                        <span class="price fs-5 fw-bold">${{ $total }}</span>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('panier') }}" class="btn btn-outline-accent w-100">
                            ← Retour au panier
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    @push("scripts")
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            // initialiser Stripe avec la clef public
            const stripe = Stripe('{{ $stripeKey }}');

            // Créer le champ de la carte (Stripe Elements)
            const elements = stripe.elements();

            const cardElement = elements.create('card', {
                style: {
                    base: {
                        color: "rgba(255, 255, 255, .92)",
                        fontSize: '16px',
                        fontFamily: 'system-ui, sans-serif',
                        '::placeholder': { color: 'rgba(255, 255, 255, .45)' }
                    },

                    invalid: {
                        color: '#f87171'
                    }
                },

                hidePostalCode: true
            });

            // Injecter l'element stripe dans le HTML
            cardElement.mount('#card-element');

            // Valider en temps réel
            cardElement.on('change', function(event) {
                const errorDiv = document.querySelector("#card-errors");
                errorDiv.textContent = event.error ? event.error.message : "";
            });

            // Soumettre le formulaire
            document.querySelector("#payment-form").addEventListener("submit", function(event) {
                event.preventDefault();

                const submitBtn = document.querySelector("#submit-btn");
                submitBtn.disabled = true;
                submitBtn.textContent = "Traitement en cours...";

                axios.post("{{ route('commande.payer') }}")
                    .then(function(reponse) {
                        const clientSecret = reponse.data.clientSecret;

                        return stripe.confirmCardPayment(clientSecret, {
                            payment_method: { card: cardElement }
                        });
                    })
                    
                    .then(function (resultat) {
                        if (resultat.error) {
                            // Dans le cas d'une erreur
                            gererErreur(resultat.error);
                        } else if (resultat.paymentIntent.status === 'succeeded') {
                            gererSuccess();
                        }
                    })
                    
                    .catch(function (erreur) {
                        const message = erreur.response ? erreur.response.data.error : "Impossible de joindre le serveur. Réessayez.";
                        gererErreur({ message: message });
                    });
            });

            /**
             * Rediriger l'utilisateur à la page de confirmation
             */
            function gererSuccess() {
                window.location.href = '{{ route("commande.confirmation") }}';
            }

            /**
             * Affiche l'erreur et rétablir le btn Payer
             */
            function gererErreur(error) {
                document.querySelector("#card-errors").textContent = error.message;

                const submitBtn = document.querySelector("#submit-btn");
                submitBtn.disabled = false;
                submitBtn.textContent = "Payer ${{ $total }}";
            }
        </script>
    @endpush
</x-layout>
