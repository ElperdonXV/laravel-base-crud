@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container p-5">
        <div class="row">
          <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="title" class="form-label">Title Comic</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Author</label>
              <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="mb-3">
              <label for="edition" class="form-label">Edition</label>
              <input type="text" class="form-control" id="edition" name="edition">
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
              <label for="number_of_pages" class="form-label">Pages</label>
              <input type="text" class="form-control" id="number_of_pages" name="number_of_pages">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
              <label for="publishing_house" class="form-label">Publishing House</label>
              <input type="text" class="form-control" id="publishing_hosue" name="publishing_house">
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
          </form>
        </div>
    </div>
   
@endsection