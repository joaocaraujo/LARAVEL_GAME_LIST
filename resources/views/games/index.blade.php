@extends('layouts.app')

@section('title', 'List')

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
    <h1>List of available games:</h1>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Year of Creation</th>
        <th scope="col">Price (R$)</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
        <tr>
            <th>{{$game->id}}</th>
            <td>{{$game->name}}</td>
            <td>{{$game->category}}</td>
            <td>{{$game->year_creation}}</td>
            <td>{{$game->price}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

</body>
</html>

@endsection
