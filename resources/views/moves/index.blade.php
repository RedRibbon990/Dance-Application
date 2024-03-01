<x-layout>

    <body id="bg-category">
        <div class="container-fluid ">
            <div class="row d-flex justify-content-center align-item-center">

                <!-- Sezione laterale sinistra fissa -->
                <aside class="col-md-2 bg-dark border border-warning text-white fixed-sidebar"
                    style="background-image: url('https://picsum.photos/400/800/?random'); background-size: cover;">
                    <div class="p-4 mt-5 text-aside">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="mb-0">Useful Information</h3>
                        </div>

                        <p class="mt-3">
                            Difficulty <span>{{ $move->difficulty }}
                                <span class="info-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Difficulty is automatically managed based on movements and learning time">
                                    <i class="bi bi-info-circle-fill text-orange"></i>
                                </span>
                        </p>

                        <p class="mt-3">
                            {{ $move->category->name }}
                            <span class="info-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Here are the typical movements of this category: Rumba - Cha cha cha
                                - Paso doble - Samba
                                ">
                                <i class="bi bi-info-circle-fill text-orange"></i>
                            </span>
                        </p>

                        <p class="mt-3">
                            Testo del paragrafo 2
                            <span class="info-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Altre informazioni">
                                <i class="bi bi-info-circle-fill text-orange"></i>
                            </span>
                        </p>
                    </div>
                </aside>


                <!-- Contenuto principale -->
                <main class="col-md-8 p-0">
                    <section id="move-index" class="container">
                        <div class="row">
                            <div class="col-12 p-3">
                                <div class="article-video mb-4">
                                    <img src="https://picsum.photos/800/400" class="img-fluid w-100" alt="...">
                                </div>
                                <h2 class="moves-title text-center mb-4">{{ $move->title }}</h2>
                                <div class="moves-video mb-4">
                                    <!-- Inserisci qui il tuo carousel -->
                                    <div id="movevements-carousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://picsum.photos/100/100?random=1"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                    <img src="https://picsum.photos/100/100?random=2"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                    <img src="https://picsum.photos/100/100?random=3"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://picsum.photos/100/100?random=4"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                    <img src="https://picsum.photos/100/100?random=5"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                    <img src="https://picsum.photos/100/100?random=6"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://picsum.photos/100/100?random=7"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                    <img src="https://picsum.photos/100/100?random=8"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                    <img src="https://picsum.photos/100/100?random=9"
                                                        class="d-block img-thumbnail mx-1" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#movevements-carousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#movevements-carousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                    <div class="moves-meta text-center mt-4">
                                        <span class="moves-date">Pubblicato il
                                            {{ $move->created_at->format('d/m/Y') }}</span>
                                        <span class="moves-author"> - {{ $move->user->name }} - </span>
                                    </div>
                                    <div class="moves-content mt-4">
                                        <p class="card-text text-white card-text-clickable">
                                            @if(strlen($move->body) > 200)
                                                <span
                                                    class="more-content">{{ Str::limit($move->body, 200) }}</span>
                                                <span class="more-hidden"
                                                    style="display: none;">{{ $move->body }}</span>
                                            @else
                                                {{ $move->body }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

                <!-- Sezione laterale destra fissa -->
                <aside class="col-md-2 bg-dark border border-warning text-white fixed-sidebar-right"
                    style="background-image: url('https://picsum.photos/400/800/?random'); background-size: cover;">
                    <!-- Contenuto della sezione laterale destra -->
                    <div class="p-4 mt-5 text-aside">
                        <h4>Il Ballo dell'Amore e della Seduzione</h4>
                        <p class="info-move">La rumba è una danza di origine cubana che incarna il fascino dell'amore e della seduzione.
                            Originariamente nata nelle strade e nei quartieri popolari di Cuba, la rumba è diventata una
                            delle espressioni più iconiche della cultura musicale e ballerina dell'isola.

                            Al centro della rumba c'è il dialogo tra il ballerino e la ballerina, una sorta di
                            corteggiamento coreografico che si svolge sul palcoscenico o sul pavimento da ballo. I
                            movimenti sono sensuali, carichi di emozione e passione, e riflettono le complesse relazioni
                            amorose e sociali.

                            Ci sono diverse varianti della rumba, ognuna con la propria personalità e stile unico. La
                            "guaguancó", ad esempio, è la forma più tradizionale della rumba, con movimenti agili,
                            giochi di seduzione e percussioni che scandiscono il ritmo del ballo.

                            La "yambú" è una variante più lenta e melodica della rumba, con movimenti più dolci e
                            sensuali che ricordano il corteggiamento e il desiderio.

                            Infine, c'è la "columbia", una forma più energetica e maschile della rumba, caratterizzata
                            da passi acrobatici e movimenti vigorosi che sfidano la gravità.

                            La rumba non è solo una danza, ma una forma d'arte che esprime le emozioni più profonde
                            attraverso il movimento del corpo. È un viaggio attraverso l'amore, la passione, la gelosia
                            e la libertà, tutto racchiuso in una serie di passi e movimenti che parlano direttamente al
                            cuore.

                            Ballare la rumba significa entrare in contatto con la propria sensualità e con quella del
                            partner, creando una connessione unica e intensa che si riflette nell'armonia dei movimenti.
                            È una danza che invita a lasciarsi andare, a esprimere se stessi completamente e a vivere il
                            momento con tutta l'intensità dell'amore e della passione.</p>
                    </div>
                </aside>
            </div>
        </div>
    </body>
</x-layout>
