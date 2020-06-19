@extends('layouts.main')

@section('main-content')

<h1 class="mb-4">Edit Books</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label class="font-weight-bold" for="title">Titolo</label>
    <input id="title" type="text" class="form-control" name="title" placeholder="Inserisci titolo del libro" value="{{ old('title', $book->title) }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="author">Autore</label>
        <input id="author" type="text" class="form-control" name="author" placeholder="Inserisci autore" value="{{ old('author', $book->author) }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="editor">Editore</label>
        <input id="editor" type="text" class="form-control" name="editor" placeholder="Inserisci editore" value="{{ old('editor', $book->editor) }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="genre">Genere</label>
        <input id="genre" type="text" class="form-control" name="genre" placeholder="Inserisci genere" value="{{ old('genre', $book->genre) }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="description">Descrizione</label>
        {{-- <input id="description" type="text" class="form-control" name="description" placeholder="Inserisci descrizione" value="{{ old('description', $book->description) }}"> --}}
        <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Inserisci descrizione" {{ old('description', $book->description) }}></textarea>
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="pages">Numero Pagine</label>
        <input id="pages" type="number" class="form-control" name="pages" placeholder="Inserisci numero pagine" value="{{ old('pages', $book->pages) }}">
    </div>
    <input class="btn btn-primary" type="submit" value="Aggiorna libro">
</form>
    
@endsection