<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);
Route::get('/table', [IndexController::class, 'dataTable']);

// CRUD Cast
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{id}/show', [CastController::class, 'show']);
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{id}', [CastController::class, 'update']);
Route::delete('/cast/{id}', [CastController::class, 'destroy']);

// CRUD Film
Route::get('/film', [FilmController::class, 'index']);
Route::get('/film/create', [FilmController::class, 'create']);
Route::post('/film', [FilmController::class, 'store']);
Route::get('/film/{id}/show', [FilmController::class, 'show']);
Route::get('/film/{id}/edit', [FilmController::class, 'edit']);
Route::put('/film/{id}', [FilmController::class, 'update']);
Route::delete('/film/{id}', [FilmController::class, 'destroy']);

Route::middleware(['auth'])->group(function () {
    // CRUD Genre
    Route::get('/genre', [GenreController::class, 'index']);
    Route::get('/genre/create', [GenreController::class, 'create']);
    Route::post('/genre', [GenreController::class, 'store']);
    Route::get('/genre/{id}/show', [GenreController::class, 'show']);
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);
});

Auth::routes();
