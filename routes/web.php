<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
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

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movie.show');

Route::get('/tv-show', [\App\Http\Controllers\TvController::class, 'index'])->name('tv-show.index');
Route::get('/tv-show{id}', [\App\Http\Controllers\TvController::class, 'show'])->name('tv-show.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors{actor}', [ActorsController::class, 'show'])->name('actors.show');
Route::get('actors/page/{page?}', [ActorsController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
