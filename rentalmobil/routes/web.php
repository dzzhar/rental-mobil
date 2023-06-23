<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MobilController;
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

Route::get('/welcome', function () {
    echo "Selamat Datang di Laravel";
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/mobil', [MobilController::class, 'index']);
    Route::get('/mobil/create', [MobilController::class, 'create']);
    Route::post('/mobil/simpan-data', [MobilController::class, 'store']);

    Route::get('/merk', [MerkController::class, 'index']);
    Route::get('/merk/create', [MerkController::class, 'create']);
    Route::post('/merk/simpan-data', [MerkController::class, 'store']);
    Route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
    Route::post('/merk/update/{id}', [MerkController::class, 'update']);
    Route::get('/merk/delete/{id}', [MerkController::class, 'delete']);

    Route::get('/tipemobil', [TipeMobilController::class, 'index']);
    Route::get('/tipemobil/create', [TipeMobilController::class, 'create']);
    Route::post('/tipemobil/simpan-data', [TipeMobilController::class, 'store']);
    Route::get('/tipemobil/edit/{id}', [TipeMobilController::class, 'edit']);
    Route::post('/tipemobil/update/{id}', [TipeMobilController::class, 'update']);
    Route::get('/tipemobil/delete/{id}', [TipeMobilController::class, 'delete']);

    Route::get('/peminjaman', [PeminjamanController::class, 'index']);
    Route::get('/peminjaman/create', [PeminjamanController::class, 'create']);
    Route::post('/peminjaman/simpan-data', [PeminjamanController::class, 'store']);
    Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
    Route::post('/peminjaman/update/{id}', [PeminjamanController::class, 'update']);
    Route::get('/peminjaman/delete/{id}', [PeminjamanController::class, 'delete']);

    Route::get('/user', [UsersController::class, 'index']);
    Route::get('/user/create', [UsersController::class, 'create']);
    Route::post('/user/simpan-data', [UsersController::class, 'store']);
    Route::get('/user/edit/{id}', [UsersController::class, 'edit']);
    Route::post('/user/update/{id}', [UsersController::class, 'update']);
    Route::get('/user/delete/{id}', [UsersController::class, 'delete']);

    Route::get('/logout', [Auth\LoginCOntroller::class, 'logout']);
});

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);

Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);
