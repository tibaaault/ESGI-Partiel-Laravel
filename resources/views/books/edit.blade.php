@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier un livre</title>
    </head>
    <div class="container mt-5">
        <div class="col-xl-10 mx-auto">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-4">Modifier le livre</h1>
                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $book->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="author">Auteur</label>
                            <input type="text" name="author" id="author" class="form-control"
                                value="{{ $book->author }}" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Année</label>
                            <input type="number" name="year" id="year" class="form-control"
                                value="{{ $book->year }}" required>
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" name="genre" id="genre" class="form-control"
                                value="{{ $book->genre }}">
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-success mt-5">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
