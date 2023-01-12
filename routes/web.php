<?php

use App\http\Controllers\GamesController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('games')->group(function() {
    Route::get('/', [GamesController::class, 'index'])->name('games-index');
    Route::get('/create', [GamesController::class, 'create'])->name('games-create');
    Route::post('/', [GamesController::class, 'store'])->name('games-store');
});

Route::fallback(function () {
    return "**ROUTE ERROR**";
});

//Route::get('/games', class::GamesController);
