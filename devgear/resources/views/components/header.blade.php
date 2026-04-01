@props(['visible' => true])
@if ($visible)
    <header class="container py-4 py-lg-5">
        <div class="glass rounded-4 p-4 p-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill hero-badge mb-3">
                        <span class="small">Bébelles utiles pour coder (et survivre).</span>
                    </div>

                    <h1 class="display-5 fw-bold mb-3">
                        Un setup pour des devs, <span style="color: var(--accent);">par des devs</span>.
                    </h1>
                    <p class="lead muted mb-4">
                        Claviers, ergonomie, hubs, câbles et petits trucs qui rendent le quotidien plus tolérables.
                        Tout ce qu'il te faut pour mettre en pratique tes compétences.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-accent btn-lg" href="#catalogue">Voir le catalogue</a>
                        <a class="btn btn-outline-accent btn-lg" href="#promo">Offres du moment</a>
                    </div>

                    <div class="d-flex gap-2 mt-4 flex-wrap">
                        <span class="pill small px-3 py-2 rounded-pill">✅ Retours simples</span>
                        <span class="pill small px-3 py-2 rounded-pill">⚡ Employés connaissants</span>
                        <span class="pill small px-3 py-2 rounded-pill">🔍 Recherche efficace</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="glass rounded-4 p-3">
                        <div class="row g-3">
                            <div class="col-6">
                                <img class="thumb w-100" src="{{ asset('images/clavier-mecanique-60-pour-dev.jpg') }}"
                                    alt="Clavier mécanique 60">
                            </div>
                            <div class="col-6">
                                <img class="thumb w-100" src="{{ asset('images/souris-ergonomique-verticale.jpg') }}"
                                    alt="Souris verticale">
                            </div>
                            <div class="col-12">
                                <img class="thumb w-100" src="{{ asset('images/hub-usb-c-6-en-1.jpg') }}"
                                    alt="Hub USB-C" style="aspect-ratio: 16/9;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif
