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
        <td class="d-flex justify-content-end border-0 mt-2"><a class="btn btn-primary"href="{{ route('comics.show', $comic->id)}}">GO</a>
          <a class="btn btn-warning ms-2" href="{{ route('comics.edit', $comic->id)}}">EDIT</a>
          <form method="POST" action="{{route('comics.destroy', $comic->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger ms-2" type="submit">DELETE</button>
          </form>
        
        </td>

      </tr>
      @empty 
        <tr><td colspan="5" class="text-center">No results found</td></tr> 
      @endforelse
    </tbody>
  </table>
@endsection