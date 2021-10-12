@extends('layouts.main')

@section('section-id', 'comics')

@section('content')
<h1 class="card-title text-primary fancy">Comics List</h1>
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
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      @empty 
        <tr><td colspan="5" class="text-center">No results found</td></tr> 
      @endforelse
    </tbody>
  </table>
@endsection