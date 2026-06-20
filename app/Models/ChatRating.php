<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatRating extends Model
{
    protected $table = 'chat_ratings';

    protected $fillable = [
        'chat_id',
        'admin_id',
        'user_id',
        'rating'
    ];
}