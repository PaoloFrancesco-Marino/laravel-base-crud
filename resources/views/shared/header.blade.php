<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lravel Crud</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-dark text-white">
            <div class="nav-brand">Laravel Crud</div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('books.index') }}">My Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('books.create') }}">Add Books</a>
                </li>
            </ul>
        </nav>
    </header>