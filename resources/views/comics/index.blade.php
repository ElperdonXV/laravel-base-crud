@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="h1">Admin - All Comics</h1>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new comic</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                 <table class="table table-primary">
                    <thead>
                        <tr class="table-primary">
                            <th>Author</th>
                            <th>Title</th>
                            <th>publishing_house</th>
                            <th>Editon</th>
                            <th>Pages</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->author }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->publishing_house }} </td>
                            <td>{{ $comic->edition }} </td>
                            <td>{{ $comic->number_of_pages}} </td>
                            <td>{{$comic->price}}€</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a>
                                <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
@endsection