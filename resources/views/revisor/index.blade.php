<x-layout>
    <div class="container-fluid p-1 bg-gradient bg-success p-2 shadow mb-4 text-center">
        <div class="row">
            <div class="col-12 text-light p-2">
                <h1 class="display-2">
                    {{ $move_to_check ? 'Ecco la Mossa da revisionare' : 'Non ci sono movimenti da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    @if($move_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1200/500?random=1" class="d-block w-100 img-fluid rounded-top"
                                    alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Primo Slide</h5>
                                    <p class="text-dark">Contenuto rappresentativo per il primo slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1200/500?random=2" class="d-block w-100 img-fluid rounded-top"
                                    alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Secondo Slide</h5>
                                    <p class="text-dark">Contenuto rappresentativo per il secondo slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1200/500?random=3" class="d-block w-100 img-fluid rounded-top"
                                    alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Terzo Slide</h5>
                                    <p class="text-dark">Contenuto rappresentativo per il terzo slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" class="text-center">Titolo</th>
                                    <th scope="col" class="text-center">Descrizione</th>
                                    <th scope="col" class="text-center">Redatto</th>
                                    <th scope="col" class="text-center">Autore</th>
                                    <th scope="col" class="text-center">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $move_to_check->title }}</td>
                                    <td>{{ $move_to_check->body }}</td>
                                    <td>{{ $move_to_check->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $move_to_check->user->name }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Azioni">
                                            <form action="{{ route('revisor.accept_move', ['move' => $move_to_check]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success btn-sm">Accetta</button>
                                            </form>
                                            <form action="{{ route('revisor.reject_move', ['move' => $move_to_check]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger btn-sm">Rifiuta</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
            </div>
        </div>
    @endif
</x-layout>
