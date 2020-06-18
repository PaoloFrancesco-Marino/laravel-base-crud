@extends('layouts.main')

@section('main-content')


@if (session('deleted')) 

    <div class="alert alert-success">
        {{ session('deleted') }} Libro Cancellato
    </div>    
@endif

<h1 class="mb-4">My Books</h1>
    <section class="books">
        <h5 class="text-primary">Books List</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td> {{ $book->id }}</td>
                        <td> {{ $book->title }}</td>
                        <td><a class="btn btn-success" href="{{ route('books.show', $book->id) }}">Show</a></td>
                        <td><a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Update</td>
                        <td>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection