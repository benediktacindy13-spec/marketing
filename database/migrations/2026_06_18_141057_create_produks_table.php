<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('produk', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('gambar');
        $table->string('kategori');
        $table->text('deskripsi_singkat');
        $table->longText('deskripsi_lengkap');
        $table->boolean('is_besar')->default(false);
        $table->timestamps();
    });
}
};
