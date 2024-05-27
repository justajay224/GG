<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class PesananController extends Controller
{
    public function index()
    {
        // Mengambil semua data transaksi untuk ditampilkan di halaman pesanan
        // $transaksis = Transaksi::with(['kendaraan', 'destinasi'])->where('user_id', auth()->id())->get();
        $transaksis = Transaksi::with(['kendaraan', 'destinasi'])->get();
        return view('admin.pesanan.index', compact('transaksis'));
    }
}
