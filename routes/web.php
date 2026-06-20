<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VideoCallController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk');

Route::get('/detailproduk/{slug}', [ProdukController::class, 'detail'])
    ->name('detailproduk');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

/* DASHBOARD */

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

});


Route::get('/pelanggan', function () {
    return view('pelanggan');
});
Route::get('/laporan', function () {
    return view('laporan');
});


/* ADMIN */
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])
    ->name('produk.edit');

Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])
    ->name('produk.update');

Route::delete('/admin/produk/{id}', [ProdukController::class, 'destroy'])
    ->name('produk.destroy');

Route::get('/video-call/{produk_id}', [VideoCallController::class, 'index'])
    ->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('/chat-admin/{produk_id}', [ChatController::class, 'index'])
        ->name('chat.admin');

    Route::post('/chat-admin', [ChatController::class, 'store'])
        ->name('chat.store');

});

Route::get('/chat', [ChatController::class, 'riwayat'])
    ->middleware('auth');
Route::post('/rating', [RatingController::class, 'store'])
->middleware('auth');

Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/kontak', [KontakController::class, 'index'])
        ->name('admin.kontak');
});