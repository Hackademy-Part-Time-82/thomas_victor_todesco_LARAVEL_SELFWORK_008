<x-layout>

    <section class="container lg mt-5">

        <div class="row justify-content-between">


            <div class="col-lg-4 gap-1">

                <div class="d-flex justify-content-center"> {{-- div wrapper --}}

                    <div class="d-lg-inline-flex justify-content-center border border-dark rounded-4 px-4">
                        i miei dati
                    </div>

                </div>

                <div class="col-lg-12 d-lg-flex justify-content-center mt-3 mb-3">
                    <div class="card p-2">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- 
            col-lg-auto -> classe bootstrap,la colonna si adatta al contenuto, ma resta comunque dentro la logica del grid (utile se è dentro una row).
            --}}

            <div class="col-lg-7">

                <div class="d-flex justify-content-center"> {{-- div wrapper --}}

                    <div class="d-lg-inline-flex justify-content-center border border-dark rounded-4 px-4">
                        i miei libri
                    </div>

                </div>

                <div class="col-lg-8 d-lg-flex justify-content-center mt-3">
                    @foreach ($books as $book)
                        <div class="card col-lg-3 p-1 text-center">
                            <img src="{{ $book->image ? Storage::url($book->image) : '\storage\covers\generic_cover.jpg' }}"
                                class="card-img-top img-fluid" alt="..." width="560" height="350">
                            <div class="card-body border-black border-top">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">Pagine: {{ $book->pages ?? 'N/D' }}</p>
                                <a href="{{ route('show', ['book' => $book]) }}" class="btn btn-primary">Vai al
                                    dettaglio</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </section>



</x-layout>
