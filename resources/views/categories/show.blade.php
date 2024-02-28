<x-layout>
    @if($moves->count() > 0)
        <section id="moves" class="py-2 bg-dark text-white">
            <div class="container">
                <h2 class="section-title text-center mb-4">Le ultime figure di ballo</h2>
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-12 py-2">
                            <div class="row">
                                @foreach($moves as $move)
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="card move-card position-relative">
                                            <img src="https://picsum.photos/200" class="card-img-top rounded-top" alt="...">
                                            <div class="move-number position-absolute top-0 start-0 bg-orange text-white">
                                                {{ $move->id }}
                                            </div>
                                            <div class="card-body bg-black">
                                                <h5 class="card-title text-white">{{ $move->title }}</h5>
                                                <p class="card-text text-white">
                                                    @if(strlen($move->body) > 100)
                                                        {{ Str::limit($move->body, 100) }}
                                                    @else
                                                        {{ $move->body }}
                                                    @endif
                                                </p>
                                                <p class="card-text text-white"><small>Difficoltà: {{ $move->difficulty }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section id="no-moves" class="py-5 bg-black text-white">
            <div class="container text-center">
                <h2 class="section-title mb-4">Nessuna mossa disponibile per {{ $category->name }}</h2>
                <p class="text-muted">Sembra che non ci siano mosse disponibili per questa categoria al momento.</p>
                <p><a href="{{ route('movements.create') }}">creane uno adesso.</a></p>
            </div>
        </section>
    @endif
</x-layout>
