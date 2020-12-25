<?php

use App\Http\Controllers\BukuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku_index');;
Route::get('/buku_create', [BukuController::class, 'create'])->name('buku_create');
Route::post('/buku_store', [BukuController::class, 'store'])->name('buku_store');
Route::get('/buku_delete/{id}', [BukuController::class, 'destroy'])->name('buku_delete');