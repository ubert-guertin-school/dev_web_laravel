<x-layout>
    <header>
        <x-nav></x-nav>
    </header>
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Champions</h1>
            <div class="row">

                @forelse ($champions as $champion)
                    <div class='col-2 card mx-2 my-2'>
                        <div class='card-body'>
                            
                            <a href="{{ route('champions.show', $champion->id) }}">
                                <h5 class='card-title text-center'>{{ $champion->nom }}</h5>
                            </a>

                            <img class='mx-auto d-block' src='http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/{{ $champion->image }}.png' />
                        </div>
                    </div>

                @empty
                    <div class="col-4 mx-2 my-2">
                        Aucun champion à afficher
                    </div>
                @endforelse

            </div>
        </div>
    </main>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</x-layout>