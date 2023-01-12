@extends('layouts.app')

@section('title', 'Add a new')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Add a new game:</h1>
        <hr>
        <form action="{{ route('games-store') }}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter game name">
                </div>
                <br>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" name="category" placeholder="Enter game category">
                </div>
                <br>
                <div class="form-group">
                    <label for="year_creation">Year:</label>
                    <input type="number" class="form-control" name="year_creation" placeholder="Enter the game's creation year">
                </div>
                <br>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter the game value(Ex: 150)">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-5"><ion-icon name="add-outline"></ion-icon></button>
                </div>
            </div>
        </form>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

@endsection
