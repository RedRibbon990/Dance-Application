<x-layout>
    <div class="container mt-4 text-center">
        <h1 class="display-4 mb-4">Tutti i Passi di Ballo</h1>
        <div class="row justify-content-center">
            @foreach($moves as $move)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow border border-warning">
                    <a href="{{ route('movements.detail', $move->title) }}" class="text-decoration-none">
                        <img src="https://picsum.photos/200" class="card-img-top rounded-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $move->title }}</h5>
                            <p class="card-text">{{ $move->description }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <small class="text-muted">by {{ $move->user->name }}</small>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $moves->links('pagination::bootstrap-4') }}
        </div>
    </div>
</x-layout>
