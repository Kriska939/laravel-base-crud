@extends('layouts.main')

@section('section-id', 'comics')

@section('content')
<div class="card-title">
  <h1 class="text-primary fancy">Comics List</h1>
  <div class="d-flex flex-row-reverse"><a class="btn btn-success" href="{{ route('comics.create')}}">Add New</a></div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Price</th>
        <th scope="col">Published</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($comics as $comic)
      <tr>
        <td>
          @if ($comic->thumb)
          <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}" class="img-fluid me-2" width="20">
          @endif
          {{ $comic->title}}</td>
        <td>{{ $comic->series}}</td>
        <td>{{ $comic->price}}</td>
        <td>{{ $comic->sale_date}}</td>
        <td><a class="btn btn-primary"href="{{ route('comics.show', $comic->id)}}">GO</a></td>
      </tr>
      @empty 
        <tr><td colspan="5" class="text-center">No results found</td></tr> 
      @endforelse
    </tbody>
  </table>
@endsection