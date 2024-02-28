
<x-layout>
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#profile">Profilo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings">Impostazioni</a>
                            </li>
                            <!-- Aggiungi altri link del menu qui -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Profilo Utente</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Città:</label>
                            <input type="text" class="form-control" id="city" value="{{ Auth::user()->city ?? 'N/A' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="dance_style" class="form-label">Stile di ballo preferito:</label>
                            <input type="text" class="form-control" id="dance_style" value="{{ Auth::user()->dance_style ?? 'N/A' }}" readonly>
                        </div>
                        <!-- Aggiungi altri campi del profilo come foto, bio, data di nascita, ecc. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>