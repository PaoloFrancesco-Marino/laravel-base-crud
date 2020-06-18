@extends('layouts.main')

@section('main-content')

<h1 class="mb-4">{{ $book->title }}</h1>

<ul class="list-group">
    <li class="list-group-item">
        Autore: {{ $book->author }}
    </li>
    <li class="list-group-item">
        Editore: {{ $book->editor }}
    </li>
    <li class="list-group-item">
        Genere: {{ $book->genre }}
    </li>
    <li class="list-group-item">
        Descrizione: {{ $book->description }}
    </li>
    <li class="list-group-item">
        Pagine: {{ $book->pages }}
    </li>
</ul>

<a class="btn btn-primary mt-5" href="{{ route('books.index') }}">My Books</a>
<a class="btn btn-danger mt-5" href="{{ route('books.edit', $book->id) }}">Modifica Libro</a>

    
@endsection