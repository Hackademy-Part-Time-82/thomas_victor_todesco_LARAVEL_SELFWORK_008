<x-layout title="Catalogo — Biblioteca Lumen">
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p class="text-uppercase small text-secondary mb-1 page-heading">Collezione</p>
                <h1 class="h2 mb-4">Catalogo dei libri</h1>

                <div class="container-lg card card-lumen">
                    <div class="row justify-content-around gap-3">
                        @foreach ($books as $book)
                            <div class="card col-lg-3 p-2 text-center">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body border-black border-top">
                                    <h5 class="card-title">{{ $book->name }}</h5>
                                    <p class="card-text ">Pagine: {{ $book->pages ?? 'N/D' }}</p>
                                    <a href="#" class="btn btn-primary">Vai al dettaglio</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-4">
                    <a class="btn btn-lumen" href="{{ route('register_your_book') }}">Registra un libro</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
