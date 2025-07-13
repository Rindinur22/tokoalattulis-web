<?php

namespace App\Http\Controllers;

use App\Models\AlatTulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlatTulisController extends Controller
{
    public function index()
    {
        $alatTulis = AlatTulis::latest()->paginate(10);
        return view('alat-tulis.index', compact('alatTulis'));
    }

    public function create()
    {
        return view('alat-tulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        AlatTulis::create($data);

        return redirect()->route('alat-tulis.index')
            ->with('success', 'Alat tulis berhasil ditambahkan!');
    }

    public function show(AlatTulis $alatTulis)
    {
        return view('alat-tulis.show', compact('alatTulis'));
    }

    public function edit(AlatTulis $alatTulis)
    {
        return view('alat-tulis.edit', compact('alatTulis'));
    }

    public function update(Request $request, AlatTulis $alatTulis)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($alatTulis->gambar && file_exists(public_path('images/' . $alatTulis->gambar))) {
                unlink(public_path('images/' . $alatTulis->gambar));
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        $alatTulis->update($data);

        return redirect()->route('alat-tulis.index')
            ->with('success', 'Alat tulis berhasil diperbarui!');
    }

    public function destroy(AlatTulis $alatTulis)
    {
        // Hapus gambar jika ada
        if ($alatTulis->gambar && file_exists(public_path('images/' . $alatTulis->gambar))) {
            unlink(public_path('images/' . $alatTulis->gambar));
        }

        $alatTulis->delete();

        return redirect()->route('alat-tulis.index')
            ->with('success', 'Alat tulis berhasil dihapus!');
    }
}