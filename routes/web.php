<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/koleksi', [KoleksiController::class, 'show'])->name('koleksi');

Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman');
