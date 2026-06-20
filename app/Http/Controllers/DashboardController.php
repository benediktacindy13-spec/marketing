<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Rating;
use App\Models\ChatRating;
use Illuminate\Support\Facades\DB;
use App\Models\KontakMessage;


class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Produk::count();
        $totalUser = User::count();
        $totalChat = ChatRating::count();
        $avgRating = Rating::avg('rating');

        $ratingProduk = Rating::select(
            'produk_id',
            DB::raw('AVG(rating) as avg_rating')
        )
        ->groupBy('produk_id')
        ->with('produk')
        ->get();

        $kepuasanChat = ChatRating::select(
            DB::raw('DATE(created_at) as tanggal'),
            DB::raw('AVG(rating) as avg_rating')
        )
        ->groupBy('tanggal')
        ->orderBy('tanggal')
        ->get();

        return view('dashboard', compact(
            'totalProduk',
            'totalUser',
            'totalChat',
            'avgRating',
            'ratingProduk',
            'kepuasanChat'
        ));

        $chatCount = KontakMessage::count();

    return view('dashboard', [
        'chatCount' => $chatCount
    ]);
    
    }

   
}