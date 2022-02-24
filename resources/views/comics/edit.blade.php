@extends('layouts.base')

@section('documentTitle')
    Edit
@endsection

@section('content')
    <div class="container">
        <div class="row">
          <form action="{{ route('comics.update') }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="title" class="form-label">Title Comic</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Author</label>
              <input type="text" class="form-control" id="author" name="author" value="{{$comic->author}}">
            </div>
            <div class="mb-3">
              <label for="edition" class="form-label">Edition</label>
              <input type="text" class="form-control" id="edition" name="edition" value="{{$comic->edition}}">
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
              <label for="number_of_pages" class="form-label">Pages</label>
              <input type="text" class="form-control" id="number_of_pages" name="number_of_pages" value="{{$comic->number_of_pages}}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
              <label for="publishing_house" class="form-label">Publishing House</label>
              <input type="text" class="form-control" id="publishing_house" name="publishing_house" value="{{$comic->publishing_house}}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
    </div>
   
@endsection