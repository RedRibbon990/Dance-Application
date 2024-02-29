<x-layout>

    <body id="bg-category">

        @if($moves->count() > 0)
            <section id="moves" class="py-2 bg-dark text-white">
                <div class="container">
                    <h2 class="section-title text-center mb-4">Le ultime figure di {{ $category->name }}</h2>
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-12 py-2">
                                <div class="row">
                                    @foreach($moves as $move)
                                        <div class="col-12 col-md-4 mb-4">
                                            <div class="card move-card position-relative">
                                                <div class="image-card position-relative">
                                                    <p
                                                        class="move-category position-absolute start-50 bottom-0 translate-middle-x bg-warning text-white">
                                                        {{ $move->category->name }}
                                                    </p>
                                                    <a href="">
                                                        <img src="https://picsum.photos/200"
                                                            class="card-img-top rounded-top" alt="...">
                                                    </a>
                                                </div>

                                                <div
                                                    class="move-number position-absolute top-0 start-0 bg-orange text-white">
                                                    {{ str_pad($move->id, 3, '0', STR_PAD_LEFT) }}
                                                </div>
                                                <div
                                                    class="card-body bg-black d-flex flex-column justify-content-center align-items-center">
                                                    <h5 class="card-title text-white">{{ $move->title }}</h5>
                                                    <p class="card-text text-white card-text-clickable">
                                                        @if(strlen($move->body) > 100)
                                                            <span
                                                                class="more-content">{{ Str::limit($move->body, 100) }}</span>
                                                            <span class="more-hidden"
                                                                style="display: none;">{{ $move->body }}</span>
                                                        @else
                                                            {{ $move->body }}
                                                        @endif
                                                    </p>
                                                    <div class="move-difficulty position-absolute top-0 end-0 p-2">
                                                        <span class="info-icon" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="Difficoltà: {{ $move->difficulty }}">
                                                            <i class="bi bi-info-circle-fill text-orange"></i>
                                                        </span>
                                                    </div>
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
                    <p><a href="{{ route('movements.create') }}" class="btn btn-primary">Crea una
                            mossa</a></p>
                </div>
            </section>
        @endif

    </body>

</x-layout>
