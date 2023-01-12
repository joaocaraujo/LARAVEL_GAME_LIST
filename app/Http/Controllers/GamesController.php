<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function index() {

        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function create() {

        return view('games.create');

    }

    public function store(Request $request) {

        Game::create($request->all());
        return redirect('/games');
    }

}
