@extends('layouts.app')

@section('title', 'Your games')

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
        <div class="row">
            <div class="col-sm-11">
                <h1>Your game list:</h1>
            </div>
            <div class="col-sm-1">
                <a href="{{ route('games-create') }}" class="btn btn-success">Add new</a>
            </div>
        </div>
        <table class="table table-dark table-striped mt-3">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Year of Creation</th>
        <th scope="col">Price (R$)</th>
        <th scope="col">Actions</th>
    </tr>
</thead>
<tbody>
    @foreach ($games as $game)
    <tr>
        <th>{{$game->id}}</th>
        <th>{{$game->name}}</th>
        <th>{{$game->category}}</th>
        <th>{{$game->year_creation}}</th>
        <th>R${{$game->price}},00</th>
    <th class="d-flex">
        <a href="{{ route('games-edit', ['id'=>$game->id]) }}" class="btn btn-primary me-2">
            <ion-icon name="create-outline"></ion-icon>
        </a>
        <form action="{{ route('games-destroy', ['id'=>$game->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
        </form>
    </th>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">&copy; 2023 Jo??o Luiz Araujo</span>
    </div>
</footer>

</body>
</html>

@endsection
