<?php

namespace Database\Seeders;

use App\Models\Rooms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rooms::create([
            'kode_kamar' => 'A1',
            'tipe_kamar' => 'Deluxe',
            'kamar' => 'Deluxe',
            'jumlah_kasur' => '1',
            'fasilitas' => 'AC, TV, Kamar Mandi',
            'harga' => '100000',
            'gambar_kamar' => 'test.jpg',
        ]);
    }
}
