<x-layout class="d-flex flex-column h-100">

    <header>
        <x-nav />
    </header>

    <main class="container my-5">
        <div class="row pe-lg-0 pt-lg-5 align-items-center rounded-3 border p-4 pb-0 shadow-lg">
            <div class="p-lg-5 pt-lg-3 p-3">
                <!-- Nom -->
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis">
                    {{ $champion->nom }}
                </h1>

                <img class="rounded-lg-3" src='http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/{{ $champion->nom }}.png' alt="" width="">

                <p class="lead">
                    {{ $champion->description }}
                </p>

                <ul class="list-group mb-3 w-50">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Attaque
                        <span class="badge text-bg-primary rounded-pill">{{ $champion->attaque }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Défense
                        <span class="badge text-bg-primary rounded-pill">{{ $champion->defense }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Magie
                        <span class="badge text-bg-primary rounded-pill">{{ $champion->magie }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Difficulté
                        <span class="badge text-bg-primary rounded-pill">{{ $champion->difficulte }}</span>
                    </li>
                </ul>

                <div class="d-grid d-md-flex justify-content-md-start mb-lg-3 mb-4 gap-2">
                    @if ($suivant)
                        <a href="{{ route('champions.show', $suivant->id) }}" class="btn btn-primary btn-lg me-md-2 fw-bold px-4">
                            Suivant: {{ $suivant->nom }}
                        </a>
                    @else
                        <a href="#" class="btn btn-secondary btn-lg me-md-2 fw-bold px-4">
                            Aucun Suivant
                        </a>
                    @endif

                    <a href="{{ route('accueil') }}" class="btn btn-outline-secondary btn-lg px-4">
                        Retour
                    </a>
                </div>
            </div>

        </div>
    </main>

    <x-footer />

</x-layout>