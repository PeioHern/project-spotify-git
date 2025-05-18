<?php

use App\Http\Controllers\PodcastController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/paginaPodcast', function () {
    return view('paginaPodcast');
})->name('paginaPodcast');


Route::post('/checkUsuario', [UsuarioController::class, 'checkUsuario'])->name('checkUsuario');

Route::get('/listaPodcasts', [PodcastController::class, 'listaPodcasts'])->name('listaPodcasts');

Route::get('/listaSongs', [SongController::class, 'listaSongs'])->name('listaSongs');
Route::post('/searchSongs', [SongController::class, 'searchSongs'])->name('searchSongs');

