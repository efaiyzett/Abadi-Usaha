<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbadiUsaha;

Route::get('/', function () {
    return view('beranda');
});

Route::controller(AbadiUsaha::class)->group(function(){
    Route::get('beranda', 'beranda');
    Route::get('layanan', 'layanan');
    Route::get('tentang-kami', 'tentang');
    Route::get('kontak', 'kontak');
    Route::get('tampil-pesanan', 'index');
    Route::get('tambah-pesanan', 'create')->name('pesanan.create');
    Route::post('tampil-pesanan', 'store')->name('pesanan.store');
    Route::get('/pesanan/edit/{id}', 'edit')->name('pesanan.edit');
    Route::post('/pesanan/edit/{id}', 'update')->name('pesanan.update');
    Route::post('/pesanan/delete/{id}', 'delete')->name('pesanan.delete');
    Route::get('/pesanan/export/excel', 'excel')->name('pesanan.excel');
    Route::get('/pesanan/export/pdf', 'pdf')->name('pesanan.pdf');
    Route::get('/pesanan/chart', 'chart')->name('chart');

    Route::get('tampil-pesanan-log', 'pesanan_log');
    Route::post('/pesanan/delete_log/{id}', 'delete_log')->name('pesanan.delete_log');
});

Route::get('beranda', function (){
    return view('beranda');
});

// middleware
Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('tampil-pesanan', [AbadiUsaha::class, 'index']);
    Route::get('/pesanan/edit/{id}', [AbadiUsaha::class, 'edit'])->name('pesanan.edit');
    Route::post('/pesanan/edit/{id}', [AbadiUsaha::class, 'update'])->name('pesanan.update');
    Route::post('/pesanan/delete/{id}', [AbadiUsaha::class, 'delete'])->name('pesanan.delete');
    Route::get('/pesanan/export/excel', [AbadiUsaha::class, 'excel'])->name('pesanan.excel');
    Route::get('/pesanan/export/pdf', [AbadiUsaha::class, 'pdf'])->name('pesanan.pdf');
    Route::get('/pesanan/{id}/detail', [AbadiUsaha::class, 'detail'])->name('pesanan.detail');
    Route::get('/export-laporan', [AbadiUsaha::class, 'laporan']);
});

Route::middleware(['auth', 'pengunjung'])->group(function() {
    Route::get('tambah-pesanan', [AbadiUsaha::class, 'create'])->name('pesanan.create');
});
