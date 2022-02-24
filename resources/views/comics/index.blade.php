@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container-top">
        <div class="row h-100">
            <div class="col-5 bg-left">
              <h1>Welcome to comics DB Shop</h1>
              <div class="description">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Maiores neque nobis qui possimus aspernatur consequuntur, veniam expedita dignissimos. 
                  Omnis et earum iusto dolor voluptatibus. Iure fuga quasi adipisci blanditiis aut!
                </p>
              </div>
            </div>
            <div class="col-7 bg-head">
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row">
            <h1 class="h1">Admin - All Comics</h1>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('comics.create') }}" class="btn btn-dark mb-2">Add new comic</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                 <table class="table table-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>publishing_house</th>
                            <th>Editon</th>
                            <th>Pages</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-black">
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->author }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->publishing_house }} </td>
                            <td>{{ $comic->edition }} </td>
                            <td>{{ $comic->number_of_pages}} </td>
                            <td>{{$comic->price}}€</td>
                            <td>
                                <a class="btn btn-outline-light" href="{{ route('comics.show', $comic) }}">View</a>
                                <a class="btn btn-outline-light" href="{{ route('comics.edit', $comic) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                {{ $comics->links() }}
            </div>
        </div>
    </div>
   
@endsection