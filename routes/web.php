<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\KendaraanController;
use App\Http\Controllers\Admin\DestinasiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Admin\AdminController;



Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});



Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->middleware('admin')->name('dashboard'); // Only users with admin role can access the dashboard

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard'); // Menggunakan AdminController untuk route dashboard
    });

    Route::get('/transaksi', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
    Route::post('/transaksi/{id}/status', [TransaksiController::class, 'updateStatus'])->name('transaksi.updateStatus');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/kendaraan', KendaraanController::class);
    Route::resource('admin/destinasi', DestinasiController::class);
    Route::get('admin/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
});
