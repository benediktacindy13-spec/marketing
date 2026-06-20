<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        Rating::create([
            'produk_id' => $request->produk_id,
            'user_id' => auth()->id(),
            'rating' => $request->rating
        ]);

        return response()->json(['success' => true]);
    }
}
