@extends('layouts.main')

@section('section-id', 'comics-show')

@section('content')

<div class="card-title">
    <h1 class="text-primary fancy">{{ $comic->title}}</h1>
    <hr>
</div>
<div class="card-body row">
    <div class="col-3 text center">
        @if($comic->thumb)
            <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}" class="img-fluid"/>
        @endif
    </div>
    <div class="col-9">
        <h3 class="text-primary fancy"><strong>Series :</strong> {{ $comic->series}} </h3>
        <h3 class="text-primary fancy"><strong>Price :</strong> {{ $comic->price}} </h3>
        <p>{!! $comic->description !!}</p>
    </div>
</div>
<div class="card-footer bg-white d-flex justify-content-end">
    <a class="btn btn-primary me-2" href="{{ url()->previous()}}">BACK</a>
    <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id)}}">EDIT</a>
</div>

@endsection