<div>
    <div class="container-fluid p-2 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">Inserisci una nuova mossa!</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form wire:submit.prevent="store" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf

                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Movimento:</label>
                        <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $title }}">
                        <p class="text-muted">Il sottotitolo deve essere unico</p>
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione:</label>
                        <textarea wire:model="body" id="body" class="form-control @error('body') is-invalid @enderror">{{ $body }}</textarea>
                        
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="difficulty" class="form-label">Difficoltà:</label>
                        <input wire:model="difficulty" type="number" class="form-control @error('difficulty') is-invalid @enderror" id="difficulty" value="{{old('difficulty')}}">
                        @error('difficulty')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    

                    <div class="mt-4">
                        <button type="submit" class="btn btn-info text-white shadow px-4 py-2">Crea</button>
                        <a href="{{ route('welcome') }}" class="btn btn-secondary px-4 ms-2">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="flex flex-row justify-center my-2 alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
