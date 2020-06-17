@extends('layouts.main')

@section('main-content')

<h1 class="mb-4">Create Books</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">Titolo</label>
        <input id="title" type="text" class="form-control" name="title" placeholder="Inserisci titolo del libro">
    </div>
    <div class="form-group">
        <label for="author">Autore</label>
        <input id="author" type="text" class="form-control" name="author" placeholder="Inserisci autore">
    </div>
    <div class="form-group">
        <label for="editor">Editore</label>
        <input id="editor" type="text" class="form-control" name="editor" placeholder="Inserisci editore">
    </div>
    <div class="form-group">
        <label for="genre">Genere</label>
        <input id="genre" type="text" class="form-control" name="genre" placeholder="Inserisci genere">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <input id="description" type="text" class="form-control" name="description" placeholder="Inserisci descrizione">
    </div>
    <div class="form-group">
        <label for="pages">Numero Pagine</label>
        <input id="pages" type="number" class="form-control" name="pages" placeholder="Inserisci numero pagine">
    </div>
    <input class="btn btn-primary" type="submit" value="Aggiungi libro">
</form>
    
@endsection