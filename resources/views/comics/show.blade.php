@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card w-50 m-5">
        <figure class="d-flex justify-content-center mt-4">
          <img class="img-fluid" src="{{ $comic->thumb}}" alt="{{ $comic->series}}">
        </figure>
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p><strong>Prezzo:</strong>  {{ $comic->price}} €</p>
          <p><strong>Data di uscita:</strong>  {{ $comic->sale_date}}</p>
          <p>{{ $comic->description}}</p>
          <a href="{{ route('comics.index', $comic->id)}}" class="btn btn-primary">Indietro</a>
        </div>
    </div>
</div>


@endsection