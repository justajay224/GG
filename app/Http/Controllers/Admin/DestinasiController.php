<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::all();
        return view('admin.destinasi.index', compact('destinasi'));
    }

    public function create()
    {
        return view('admin.destinasi.create');
    }

    public function store(Request $request)
    {
        Destinasi::create($request->all());
        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil ditambahkan.');
    }

    public function edit(Destinasi $destinasi)
    {
        return view('admin.destinasi.edit', compact('destinasi'));
    }

    public function update(Request $request, Destinasi $destinasi)
    {
        $destinasi->update($request->all());
        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil diperbarui.');
    }

    public function destroy(Destinasi $destinasi)
    {
        $destinasi->delete();
        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil dihapus.');
    }
}
