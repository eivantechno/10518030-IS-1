<?php

use App\Http\Controllers\ProdukController;

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
Route::get('/produk', [ProdukController::class,'create']);
Route::get('/produk', [ProdukController::class,'store']);
Route::get('/produk', [ProdukController::class,'edit'])->name('produk.edit');
Route::post('/produk/create{produk?}', [ProdukController::class,'store'])->name('produk.edit');

 
