<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BankSampahController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\UserController;
use App\Models\PengajuanSurat;
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


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('pengajuan-surat', PengajuanSuratController::class);
});

Route::middleware(['auth', 'role:penduduk'])->group(function () {
    Route::resource('penduduk', PendudukController::class);
});

Route::middleware(['auth', 'role:banksampah'])->group(function () {
    Route::resource('bank-sampah', BankSampahController::class);
});

Route::middleware(['auth', 'role:bumdes'])->group(function () {
    Route::resource('bumdes', BumdesController::class);
});