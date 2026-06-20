<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontakMessage extends Model
{
   protected $fillable = ['nama','email','whatsapp','pesan'];
}
