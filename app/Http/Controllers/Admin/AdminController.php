<?php

// app/Http/Controllers/Admin/AdminController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kendaraan; 
use App\Models\Destinasi;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Menghitung jumlah pesanan dengan status pending
        $pendingorder = Transaksi::where('status', 'pending')->count();

        // Menghitung jumlah kendaraan yang rusak
        $kendaraanrusak = Kendaraan::where('status', 'rusak')->count();

        $kendaraanoperasi = Kendaraan::where('status', 'sedang beroperasi')->count();

        $banyakdestinasi = Destinasi::count();

        return view('admin.dashboard', compact('pendingorder', 'kendaraanrusak', 'kendaraanoperasi', 'banyakdestinasi'));
    }
}


