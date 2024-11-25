<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;




Route::get('/user', [UserController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);

Route::get('/katagori', [KategoriController::class, 'index']);

Route::get('/laporan', [LaporanController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
