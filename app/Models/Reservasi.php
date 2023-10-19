<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasis';
    protected $guarded = [];

    public function kamar(){
        return $this->belongsTo(Rooms::class, 'kamar_id', 'id');
    }
}


