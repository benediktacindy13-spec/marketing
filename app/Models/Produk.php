<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

protected $table = 'produk';

protected $fillable = [
        'nama',
        'gambar',
        'kategori',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'is_besar'
    ];

public function chats()
{
return $this->hasMany(Chat::class);
}

}