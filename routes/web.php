<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;

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
