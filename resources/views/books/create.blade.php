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
        <label class="font-weight-bold" for="title">Titolo</label>
    <input id="title" type="text" class="form-control" name="title" placeholder="Inserisci titolo del libro" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="author">Autore</label>
        <input id="author" type="text" class="form-control" name="author" placeholder="Inserisci autore" value="{{ old('author') }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="editor">Editore</label>
        <input id="editor" type="text" class="form-control" name="editor" placeholder="Inserisci editore" value="{{ old('editor') }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="genre">Genere</label>
        <input id="genre" type="text" class="form-control" name="genre" placeholder="Inserisci genere" value="{{ old('genre') }}">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="description">Descrizione</label>
        {{-- <input id="description" type="text" class="form-control" name="description" placeholder="Inserisci descrizione" value="{{ old('description') }}"> --}}
        <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Inserisci descrizione" {{ old('description') }}></textarea>
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="pages">Numero Pagine</label>
        <input id="pages" type="number" class="form-control" name="pages" placeholder="Inserisci numero pagine" value="{{ old('title') }}">
    </div>
    <input class="btn btn-primary" type="submit" value="Aggiungi libro">
</form>
    
@endsection