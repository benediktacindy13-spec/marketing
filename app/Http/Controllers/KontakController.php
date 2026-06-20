<?php

namespace App\Http\Controllers;

use App\Models\KontakMessage;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'whatsapp' => 'required',
        'pesan' => 'required',
    ]);

    KontakMessage::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'whatsapp' => $request->whatsapp,
        'pesan' => $request->pesan,
    ]);

    return redirect()->back()->with('success', 'Pesan berhasil dikirim');
}

    public function index()
{
    $pesan = KontakMessage::latest()->get();

    return view('admin.kontak', compact('pesan'));
}

public function destroy($id)
{
    KontakMessage::findOrFail($id)->delete();

    return redirect()->back()->with('success', 'Pesan berhasil dihapus');
}

}
