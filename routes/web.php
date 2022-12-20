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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::resource('users', UserController::class);
    Route::resource('penduduk', PendudukController::class);
    Route::resource('bumdes', BumdesController::class);
    Route::resource('bank-sampah', BankSampahController::class);
    Route::resource('pengajuan-surat', PengajuanSuratController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout']);
});
