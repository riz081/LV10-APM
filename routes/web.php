<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriPengaduanController;
use App\Http\Controllers\LaporanMasukController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/masyarakat', MasyarakatController::class);
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/kategori', KategoriPengaduanController::class);
Route::get('/laporanmasuk', [LaporanMasukController::class, 'index']);
Route::get('/laporanmasuk/detail/{id}', [LaporanMasukController::class, 'detail']);