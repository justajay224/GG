<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Destinasi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function create()
    {
        $kendaraans = Kendaraan::where('status', 'tersedia')->get();
        $destinasis = Destinasi::all();
        return view('transaksi.create', compact('kendaraans', 'destinasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'destinasi_id' => 'required|exists:destinasi,id',
            'nomor_telepon' => 'required|string|max:255',
            'tanggal_keberangkatan' => 'required|date',
            'jumlah_penumpang' => 'required|integer|min:1',
            'metode_pembayaran' => 'required|in:QRIS,DANA,GOPAY,Transfer Bank',
        ]);

        $kendaraan = Kendaraan::find($request->kendaraan_id);
        $destinasi = Destinasi::find($request->destinasi_id);
        $totalPembayaran = $kendaraan->biaya + ($request->jumlah_penumpang * $destinasi->biaya);

        $transaksi = Transaksi::create([
            'user_id' => Auth::id(),
            'kendaraan_id' => $request->kendaraan_id,
            'destinasi_id' => $request->destinasi_id,
            'nomor_telepon' => $request->nomor_telepon,
            'tanggal_keberangkatan' => $request->tanggal_keberangkatan,
            'jumlah_penumpang' => $request->jumlah_penumpang,
            'total_pembayaran' => $totalPembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status' => 'pending',
        ]);

        return redirect()->route('transaksi.show', $transaksi->id)->with('success', 'Transaksi berhasil dibuat. Silakan lakukan pembayaran.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::with(['kendaraan', 'destinasi'])->findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:dibayar,selesai',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->status = $request->status;
        $transaksi->save();

        return redirect()->route('pesanan.index')->with('success', 'Status transaksi berhasil diubah.');
    }
}
