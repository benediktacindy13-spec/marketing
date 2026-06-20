<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class ChatController extends Controller
{
    // tampilkan chat berdasarkan user & produk
   public function index($produk_id)
{
    $chat = Chat::with(['messages' => function ($q) {
        $q->orderBy('created_at', 'asc');
    }])
    ->where('produk_id', $produk_id)
    ->where('user_id', Auth::id())
    ->first();

    if (!$chat) {
        $chat = null;
    }

    return view('chat-admin', [
        'chat' => $chat,
        'produk_id' => $produk_id
    ]);
}
    // kirim pesan
    public function store(Request $request)
{
    $request->validate([
        'message' => 'required',
        'produk_id' => 'required'
    ]);

    $chat = Chat::firstOrCreate([
        'user_id' => Auth::id(),
        'produk_id' => $request->produk_id
    ]);

    Message::create([
        'chat_id' => $chat->id,
        'sender_id' => Auth::id(),
        'message' => $request->message,
    ]);

    return back();
}

    // admin reply (optional)
    public function reply(Request $request)
{
    $request->validate([
        'message' => 'required',
        'chat_id' => 'required'
    ]);

    Message::create([
        'chat_id' => $request->chat_id,
        'sender_id' => Auth::id(),
        'message' => $request->message,
    ]);

    return back();
}

    public function riwayat()
{
    if (Auth::user()->role == 'admin') {

        $chats = Chat::with(['messages', 'user', 'produk'])
            ->latest()
            ->get();

    } else {

        $chats = Chat::with(['messages', 'user', 'produk'])
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

    }

    return view('chat.riwayat', compact('chats'));
}
}