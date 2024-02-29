<x-layout>

    <body>
        <header class="header">
            <div class="hero d-flex justify-content-center align-items-center">
                <div class="container text-center">
                    <h1 class="hero-title">Scopri il mondo del ballo con BallApp</h1>
                    <p class="hero-subtitle m-0">L'app che ti guiderà passo dopo passo verso il ballo dei tuoi sogni.
                    </p>
                </div>
            </div>
        </header>

        <section id="carousel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/1200/500?random=1" class="d-block w-100 img-fluid"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1200/500?random=2" class="d-block w-100 img-fluid"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1200/500?random=3" class="d-block w-100 img-fluid"
                            alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="dance-styles" class="py-5 bg-light text-black">
            <div class="container text-center">
                <h2 class="section-title mb-4">Scopri le Categorie</h2>
                <div class="row d-flex justify-content-center align-items-center">
                    @foreach($categories as $category)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 border-0 shadow">
                                <a class="category-card-link" href="{{ route('category.show', ['category' => $category->id]) }}">
                                    <img src="https://picsum.photos/1200/500?random=4" class="card-img-top" alt="Salsa">
                                </a>
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="logo-container">
                                        <img src="{{ asset($category->logoPath) }}"
                                            alt="{{ $category->name }} Icon" class="category-icon img-fluid">
                                    </div>
                                    <h3 class="card-title">{{ $category->name }}</h3>
                                    <p class="card-text">{{ $category->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container py-5">
                <h4 class="mb-3">La differenza tra Salsa e Bachata?</h4>
                <p>
                    Lo stile è completamente differente così come gli accenti ritmici. A differenza della bachata,
                    che è spesso ballata con un movimento laterale, la salsa è tipicamente eseguita sul posto grazie
                    a passi in avanti e all'indietro, lateralmente, diagonalmente e possiede più livelli di
                    distribuzione anche in altezza.
                </p>
            </div>
        </section>

        <!-- Show new Moves -->
        <section id="dance-moves" class="py-5">
            <div class="container text-center">
                <h2 class="section-title mb-4">Le ultime figure di ballo</h2>
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                @foreach($moves as $move)
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="card move-card shadow-sm">
                                            <img src="https://picsum.photos/200" class="card-img-top rounded-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $move->title }}</h5>
                                                <p class="card-text">
                                                    @if(strlen($move->body) > 60)
                                                        {{ Str::limit($move->body, 60) }}
                                                    @else
                                                        {{ $move->body }}
                                                    @endif
                                                </p>
                                                <div class="move-difficulty position-absolute top-0 end-0 p-2">
                                                    <span class="info-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Difficoltà: {{ $move->difficulty }}">
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

        <section id="features" class="features bg-white text-black py-3">
            <a href="#download" class="btn btn-primary">Scarica Ora</a>
            <div class="container">
                <h2 class="section-title">Caratteristiche Principali</h2>
                <div class="feature">
                    <img src="feature1.jpg" alt="Feature 1" class="feature-img">
                    <h3 class="feature-title">Lezioni Guidate</h3>
                    <p class="feature-description">Scopri le nostre lezioni passo dopo passo, adatte a tutti i livelli
                        di esperienza.</p>
                </div>
                <div class="feature">
                    <img src="feature2.jpg" alt="Feature 2" class="feature-img">
                    <h3 class="feature-title">Musica Personalizzata</h3>
                    <p class="feature-description">Crea le tue playlist personalizzate per allenarti con la musica che
                        ami.</p>
                </div>
                <div class="feature">
                    <img src="feature3.jpg" alt="Feature 3" class="feature-img">
                    <h3 class="feature-title">Calendario Eventi</h3>
                    <p class="feature-description">Resta aggiornato su tutti gli eventi e le serate di ballo nella tua
                        zona.</p>
                </div>
            </div>

            <section id="download" class="download">
                <div class="container">
                    <h2 class="section-title">Scarica BallApp Ora</h2>
                    <p class="section-description">Inizia a ballare come hai sempre sognato!</p>
                    <div class="download-buttons">
                        <a href="#" class="btn btn-primary">App Store</a>
                        <a href="#" class="btn btn-secondary">Google Play</a>
                    </div>
                </div>
            </section>

            <footer id="contact" class="footer">
                <div class="container">
                    <p class="footer-text">Contattaci per ulteriori informazioni</p>
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <p class="footer-copy">&copy; 2024 BallApp. Tutti i diritti riservati.</p>
                </div>
            </footer>

            <!-- JavaScript di Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</x-layout>
