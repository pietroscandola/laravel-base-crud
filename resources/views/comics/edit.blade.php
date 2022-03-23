@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Modifica il fumetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @method ('PUT')
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Fumetto</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine Fumetto</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo Fumetto</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">€</span>
                            <input type="number" class="form-control" default="0" min="0" step="0.01" id="price"
                                name="price" value="{{ $comic->price }}">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Nome della serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di fumetto</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="6"
                            required>{{ $comic->description }}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-3">Conferma</button>
            <a href="{{ route('comics.index') }}" class="btn btn-outline-info">Indietro</a>
        </form>
    </div>
@endsection
