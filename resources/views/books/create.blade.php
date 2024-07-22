@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Creer un livre</title>
    </head>
    <div class="col-xl-8 mx-auto mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4 text-center">Ajouter un nouveau livre</h1>
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Auteur</label>
                        <input type="text" name="author" id="author" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Année</label>
                        <input type="number" name="year" id="year" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" name="genre" id="genre" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-5">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
