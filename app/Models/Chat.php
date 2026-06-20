<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Message;

class Chat extends Model
{
    protected $fillable = [
        'user_id',
        'produk_id',
        'message',
        'sender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

}