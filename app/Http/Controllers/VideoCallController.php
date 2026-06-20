<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoCallController extends Controller
{
    public function index($produk_id)
    {
        return view('video-call', compact('produk_id'));
    }
}