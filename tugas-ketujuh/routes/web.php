<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
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

Route::get('/',[IndexController::class, 'home']);
Route::get('/register',[AuthController::class, 'register']);
Route::post('/welcome',[AuthController::class, 'welcome']);
Route::get('/table', [IndexController::class, 'dataTable']);

// CRUD Cast
Route::get('/cast',[CastController::class, 'index']);
Route::get('/cast/create',[CastController::class, 'create']);
Route::post('/cast',[CastController::class, 'store']);
Route::get('/cast/{id}/edit',[CastController::class, 'edit']);
Route::put('/cast/{id}',[CastController::class, 'update']);
Route::delete('/cast/{id}',[CastController::class, 'destroy']);
