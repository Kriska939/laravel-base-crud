@extends('layouts.main')

@section('section-id', 'create-form')

@section('content')
<div class="card-title">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fancy text-primary">Add new comic</h1>
            <a class="btn btn-primary"href="{{ route('comics.index')}}">BACK</a>
    </div>
    <hr>
</div>
<div class="card-body">
<form method="POST" action="{{route('comics.store')}}">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label text-primary fancy"><strong>Title</strong></label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
        </div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="series" class="form-label text-primary fancy"><strong>Series</strong></label>
                <input type="text" class="form-control" id="series" name="series">
              </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label for="price" class="form-label text-primary fancy"><strong>Price</strong></label>
                <input type="text" class="form-control" id="price" name="price">
              </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="sale_date" class="form-label text-primary fancy"><strong>Publishing Date (YYYY-MM-DD)</strong></label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
              </div>
        </div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="thumb" class="form-label text-primary fancy"><strong>Cover (http URL)</strong></label>
                <input type="text" class="form-control" id="thumb" name="thumb">
              </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="description" class="form-label text-primary fancy"><strong>Description</strong></label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
          </div>
        </div> 
    </div>
    <div class="card-footer bg-white d-flex justify-content-end pt-4">
        <button type="submit" class="btn btn-success me-2">Add</button>
        <button type="reset"class="btn btn-secondary">Cancel</button>
    </div>
</form>
</div>


@endsection