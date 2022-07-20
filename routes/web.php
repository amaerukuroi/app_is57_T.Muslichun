<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PemesananController;


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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Layanan//

Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/layanan/form', [LayananController::class, 'create']);
Route::post('/layanan/store', [LayananController::class, 'store']);
Route::get('/layanan/edit/{id}', [LayananController::class, 'edit']);
Route::put('/layanan/{id}', [LayananController::class, 'update']);
Route::delete('/layanan/{id}', [LayananController::class, 'destroy']);

//Pekerjaa///

Route::get('/umobil', [MobilController::class, 'index']);
Route::get('/umobil/form', [MobilController::class, 'create']);
Route::post('/umobil/store', [MobilController::class, 'store']);
Route::get('/umobil/edit/{id}', [MobilController::class, 'edit']);
Route::put('/umobil/{id}', [MobilController::class, 'update']);
Route::delete('/umobil/{id}', [MobilController::class, 'destroy']);


//Pemesanan//

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/form', [PemesananController::class, 'create']);
Route::post('/pemesanan/store', [PemesananController::class, 'store']);
Route::get('/pemesanan/edit/{id}', [PemesananController::class, 'edit']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);