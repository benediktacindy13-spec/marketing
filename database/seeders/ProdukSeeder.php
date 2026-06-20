<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
{
    Produk::insert([
    [
        'nama' => 'HIVIC',
        'gambar' => 'hivic.jpeg',
        'kategori' => 'minuman',
        'deskripsi_singkat' => 'Minuman Vitamin C untuk membantu tubuh tetap segar dan siap beraktivitas.',
        'deskripsi_lengkap' => "*Membantu memenuhi kebutuhan vitamin C harian.\n*Mendukung daya tahan tubuh.\n*Perlindungan antioksidan.\n*Menunjang kebugaran sehari-hari.\n*Praktis untuk konsumsi harian.",
        'is_besar' => 0
    ],
    [
        'nama' => 'JUS C',
        'gambar' => 'jusc.jpeg',
        'kategori' => 'minuman',
        'deskripsi_singkat' => 'Minuman Susu rasa Buah dengan Vitamin C yang dapat dinikmati kapan saja.',
        'deskripsi_lengkap' => "*Dukung daya tahan tubuh.\n*Vitamin C lebih enak diminum.\n*Ringan dan nyaman di lambung.\n*Teman energi harian.\n*Nutrisi praktis untuk gaya hidup aktif.",
        'is_besar' => 0
    ],
    [
        'nama' => 'MEX C',
        'gambar' => 'mexc.jpeg',
        'kategori' => 'minuman',
        'deskripsi_singkat' => 'Minuman susu rasa buah dengan Vitamin C dan soda.',
        'deskripsi_lengkap' => "*Dukung daya tahan tubuh.\n*Sensasi soda creamy.\n*Rasa buah lebih hidup.\n*Ringan dan nyaman diminum.\n*Teman energi aktivitas.\n*Praktis untuk gaya hidup aktif.",
        'is_besar' => 0
    ],
    [
        'nama' => 'Susu Kambing',
        'gambar' => 'sukam.jpeg',
        'kategori' => 'susukambing',
        'deskripsi_singkat' => 'Minuman susu kambing untuk kesehatan tubuh.',
        'deskripsi_lengkap' => "*Menjaga kesehatan tulang dan gigi.\n*Mendukung daya tahan tubuh.\n*Lebih mudah dicerna dan ramah lambung.\n*Menunjang kesehatan jantung.\n*Nutrisi alami yang telah dipercaya sejak lama.",
        'is_besar' => 0
    ],
    [
        'nama' => 'ENP',
        'gambar' => 'enp.jpeg',
        'kategori' => 'susukambing',
        'deskripsi_singkat' => 'Susu kambing etawa untuk nutrisi harian.',
        'deskripsi_lengkap' => "*Susu kambing etawa.\n*Tinggi Kalsium untuk membantu tulang agar tetap kuat.\n*Ramah dilambung dan mudah dicerna.\n*Mendukung kesehatan sendi untuk tetap aktif.",
        'is_besar' => 0
    ],
    [
        'nama' => 'Honestly Collagen Drink',
        'gambar' => 'collagen.jpeg',
        'kategori' => 'collagen',
        'deskripsi_singkat' => 'Minuman collagen untuk kesehatan kulit.',
        'deskripsi_lengkap' => "*Membantu menjaga elastisitas dan kekenyalan kulit.\n*Membantu mencerahkan kulit.\n*Mendukung produksi kolagen alami tubuh.\n*Membantu melindungi kulit dari stres oksidatif.\n*Membantu menjaga kesehatan rambut dan kuku.",
        'is_besar' => 0
    ],
    [
        'nama' => 'Honestly Dietary Fiber Drink',
        'gambar' => 'fiber.jpeg',
        'kategori' => 'collagen',
        'deskripsi_singkat' => 'Minuman serat tinggi untuk pencernaan.',
        'deskripsi_lengkap' => "*Membantu melancarkan pencernaan.\n*Membantu menjaga kesehatan usus.\n*Membantu menjaga berat badan.\n*Menunjang kesehatan metabolisme.\n*Praktis untuk dikonsumsi setiap hari.",
        'is_besar' => 0
    ],
    [
        'nama' => 'ENP Collagen',
        'gambar' => 'colagenp.jpeg',
        'kategori' => 'collagen',
        'deskripsi_singkat' => 'Collagen dengan susu kambing etawa.',
        'deskripsi_lengkap' => "*Nutrisi alami dari Susu Kambing Etawa, dengan kandungan collagen dan kalsium.\n*Menjaga daya tahan tubuh.\n*Memperkuat tulang.\n*Mengurangi resiko nyeri pada sendi.",
        'is_besar' => 0
    ],
    ]);
}
}