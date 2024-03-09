<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [AuthController::class, 'signup']);

Route::post('/welcome', [AuthController::class, 'submit']);

Route::get('/table', function () {
    return view('pages.table');
});

Route::get('/data-tables', function () {
    return view('pages.data-table');
});

//CRUD CAST

// C -> create
Route::get('/cast/create', [CastController::class, 'create']);

Route::post('/cast', [CastController::class, 'store']);

// R->read
Route::get('/cast', [CastController::class, 'index']);

Route::get('/cast/{id}', [CastController::class, 'show']);

// U->update
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);

Route::put('/cast/{id}', [CastController::class, 'update']);

// D->Delete
Route::delete('/cast/{id}', [CastController::class, 'destroy']);
