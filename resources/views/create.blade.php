<x-layout title="Registra un libro — Biblioteca Lumen">
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <p class="text-uppercase small text-secondary mb-1 page-heading">Archivio</p>
                <h1 class="h2 mb-4 text-center text-lg-start">Registra i dati del tuo libro</h1>

                <div class="card card-lumen p-4 p-md-5">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('store_book') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="name">Titolo</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text"
                                placeholder="Titolo del libro" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    Il nome del libro è obbligatorio
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="year">Anno</label>
                            <input class="form-control" id="year" type="number"
                                placeholder="Anno di pubblicazione" name="year" value="{{ old('year') }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="pages">Pagine</label>
                            <input class="form-control" id="pages" type="number"
                                placeholder="Numero di pagine" name="pages" value="{{ old('pages') }}">
                        </div>

                        <div class="d-flex flex-wrap justify-content-between gap-2">
                            <button class="btn btn-lumen" type="submit">Invia</button>
                            <button class="btn btn-outline-secondary" type="reset">Reset campi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
