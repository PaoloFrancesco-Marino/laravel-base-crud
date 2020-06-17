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
    
@endsection