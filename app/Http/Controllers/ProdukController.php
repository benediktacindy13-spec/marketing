<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    // LIST PRODUK
    public function index(Request $request)
    {
        $kategori = $request->get('kategori', 'semua');

        $query = Produk::query();

        if ($kategori !== 'semua') {
            $query->where('kategori', $kategori);
        }

        $produk = $query->get();

        return view('produk', compact('kategori', 'produk'));
    }

    // FORM TAMBAH
    public function create()
{
    return view('admin.produk.create');
}

    // SIMPAN
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi_lengkap' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

            // UPLOAD GAMBAR
        $fileName = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
        }


        Produk::create([
            'nama' => $request->nama,
            'gambar' => $fileName,
            'kategori' => $request->kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'is_besar' => $request->is_besar == 1
        ]);

        return redirect()->route('produk');
    }

    // DETAIL
    public function detail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detailproduk', compact('produk'));
    }

    // EDIT
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    // UPDATE
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'kategori' => 'required',
        'deskripsi_singkat' => 'required',
        'deskripsi_lengkap' => 'required',
        'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $produk = Produk::findOrFail($id);

    $fileName = $produk->gambar;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);
    }

    $produk->update([
        'nama' => $request->nama,
        'gambar' => $fileName,
        'kategori' => $request->kategori,
        'deskripsi_singkat' => $request->deskripsi_singkat,
        'deskripsi_lengkap' => $request->deskripsi_lengkap,
        'is_besar' => $request->is_besar == 1
    ]);

    return redirect()->route('produk');
}

    // DELETE
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk');
    }
}