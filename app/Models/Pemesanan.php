<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    public function mobils(){
        return $this->hasOne(Mobil::class,'id','mobils_id');
    }
    public function layanans(){
        return $this->hasOne(Layanan::class,'id','layanans_id');
    }
}
