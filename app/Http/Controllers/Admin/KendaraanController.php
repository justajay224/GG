<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('admin.kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('admin.kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'supir' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:tersedia,sedang beroperasi,rusak',
            'biaya' => 'required|numeric',
        ]);

        $fotoPath = $request->file('foto')->store('public/fotos');

        Kendaraan::create([
            'nama' => $request->nama,
            'supir' => $request->supir,
            'foto' => $fotoPath,
            'status' => $request->status,
            'biaya' => $request->biaya,
        ]);

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.kendaraan.show', compact('kendaraan'));
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'supir' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:tersedia,sedang beroperasi,rusak',
            'biaya' => 'required|numeric',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/fotos');
            $kendaraan->foto = $fotoPath;
        }

        $kendaraan->nama = $request->nama;
        $kendaraan->supir = $request->supir;
        $kendaraan->status = $request->status;
        $kendaraan->biaya = $request->biaya;
        $kendaraan->save();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diupdate');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus');
    }
}
