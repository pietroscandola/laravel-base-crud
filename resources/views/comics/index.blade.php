@extends('layouts.main')

@section('content')
<div class="container mt-5">
  <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('comics.create')}}" class="btn btn-small btn-success">Aggiungi un Fumetto</a>
  </div>
  <div class="cards d-flex flex-wrap justify-content-center">
    @foreach ($comics as $comic)
    <div class="card w-25 m-3">
      <figure class="d-flex justify-content-center mt-4">
        <img class="img-fluid" src="{{ $comic->thumb}}" alt="{{ $comic->series}}">
      </figure>
      <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p><strong>Prezzo:</strong>  {{ $comic->price}} €</p>
        <p><strong>Data di uscita:</strong>  {{ $comic->sale_date}}</p>
        <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Scopri di più</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection