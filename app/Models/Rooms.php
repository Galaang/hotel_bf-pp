<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kamar',
        'kamar',
        'fasilitas',
        'tipe_kamar',
        'jumlah_kasur',
        'harga',
        'gambar_kamar',
    ];
    protected $table = 'kamars';
    public $timestamps = false;
}
