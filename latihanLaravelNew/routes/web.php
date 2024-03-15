<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;

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

Route::group(['middleware' => ['auth']], function () {
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


    //CRUD GENRE

    // C -> create
    Route::get('/genre/create', [GenreController::class, 'create']);

    Route::post('/genre', [GenreController::class, 'store']);

    // R->read
    Route::get('/genre', [GenreController::class, 'index']);

    Route::get('/genre/{id}', [GenreController::class, 'show']);

    // U->update
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);

    Route::put('/genre/{id}', [GenreController::class, 'update']);

    // D->Delete
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);

    Route::get('/profil', [ProfileController::class, 'index']);

    Route::put('/profil/{id}', [ProfileController::class, 'update']);
});


// CRUD Film
Route::resource('film', FilmController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
