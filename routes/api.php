<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FavoriteFilmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('films', FilmController::class);
Route::get('/films/search/{title_film}', [FilmController::class, 'search'])->name('search');
// Route::get('/films', [FilmController::class, 'index'])->name('home');
// Route::get('/films/{film}', [FilmController::class, 'show'])->name('show');
// Route::post('/films', [FilmController::class, 'store'])->name('store');
// Route::put('/films/{film}', [FilmController::class, 'update'])->name('update');
// Route::delete('/films/{film}', [FilmController::class, 'delete'])->name('delete');
// Route::('/films/{film}', [FilmController::class, 'delete'])->name('delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
