@extends('layouts.main');

@section('content')
<div class="card w-25 m-5">
    <figure class="d-flex justify-content-center mt-4">
      <img src="{{ $comic->thumb}}" alt="{{ $comic->series}}">
    </figure>
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p><strong>Prezzo:</strong>  {{ $comic->price}} €</p>
      <p><strong>Data di uscita:</strong>  {{ $comic->sale_date}}</p>
      <a href="{{ route('comics.index', $comic->id)}}" class="btn btn-primary">indietro</a>
    </div>
</div>

@endsection