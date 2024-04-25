<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route pour le AuthController
Route::controller(AuthController::class)->name('auth.')->group(function () {

    // Route d'affichage de la page register
    Route::get('/register', 'register')->name('register');

    // Route de sauvegarde des utilisateur register
    Route::post('register', 'registerSave')->name('register');

    // Route d'affichage de la page login
    Route::get('/login', 'login')->name('login');
});