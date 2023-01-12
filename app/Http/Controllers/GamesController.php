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

    public function edit($id) {

        $games = Game::where('id', $id)->first();
        if (!empty($games)) {
            return view('games.edit', ['games' => $games]);
        } else {
            return redirect()->route('games-index');
        }
    }

    public function update(Request $request, $id) {

        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'year_creation' => $request->year_creation,
            'price' => $request->price,
        ];

        Game::where('id', $id)->update($data);
        return redirect()->route('games-index');
    }

}
