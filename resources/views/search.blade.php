<x-layout>

    <body class="bg-dark">
        <div class="container mt-5 pb-3">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('search') }}" method="GET" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Search for moves...">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    @if(isset($moves))
                        @if($moves->count() > 0)
                            <h3>Search Results for "{{ $query }}"</h3>
                            <div class="row">
                                @foreach($moves as $move)
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="card move-card position-relative">
                                            <img src="https://picsum.photos/200" class="card-img-top rounded-top"
                                                alt="...">
                                            <div
                                                class="move-number position-absolute top-0 start-0 bg-orange text-white">
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
                                                <p class="card-text text-white"><small>Difficoltà:
                                                        {{ $move->difficulty }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No results found for "{{ $query }}"</p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </body>
</x-layout>
