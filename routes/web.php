<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\KendaraanController;
use App\Http\Controllers\Admin\DestinasiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PesananController;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin']) ->name('dashboard'); // Hanya pengguna dengan peran admin yang dapat mengakses dashboard



Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/kendaraan', KendaraanController::class);
    Route::resource('admin/destinasi', DestinasiController::class);
    Route::get('admin/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
});

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::resource('admin/destinasi', DestinasiController::class);
//     Route::get('admin/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
// });


Route::middleware(['auth'])->group(function () {
    Route::get('/transaksi', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
    Route::post('/transaksi/{id}/status', [TransaksiController::class, 'updateStatus'])->name('transaksi.updateStatus');

     
});

