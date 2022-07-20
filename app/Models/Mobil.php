<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    public function pemesanans(){
        return $this->belongTo(Pemesanan::class);
    }
}
