<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'ikmal',
            'email' => 'ikmal@gmail.com',
            'password' => bcrypt('ikmal'),
            'no_id' => '123',
            'telepon' => '085',
            'Tanggal_Lahir' => '2003/5/7',
            'Jenis_Kelamin' => 'Laki-Laki',
            'remember_token' => str::random(60),
        ]);
    }
}
