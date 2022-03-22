@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Inserisci un fumetto</h1>
    <form action="{{ route('comics.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
            </div>
            
            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine Fumetto</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo Fumetto</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Nome della serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>                
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
        <button type="reset" class="btn btn-secondary">Cancella</button>    
    </form>
</div>


@endsection




{{--
    title
    description
    thumb
    price
    series
    sale_date
    type 
    
    --}}