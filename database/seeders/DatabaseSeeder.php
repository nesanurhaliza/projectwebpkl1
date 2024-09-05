<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'nana',
            'email' => 'nesa9851@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => ''
        ]);
        User::create([
            'name' => 'sasa',
            'email' => 'sasa@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => ''
        ]);
        User::create([
            'name' => 'han',
            'email' => 'han@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => ''
        ]);
        product::create([
            'name' => 'lampu',
            'harga' => '40000',
            'warna' => 'coklat',
            'stok' => '3',
            'foto' =>'lamp-thai-style.png',

        ]);
        product::create([
            'name' => 'meja',
            'harga' => '3.400.000',
            'warna' => 'coklat',
            'stok' => '5',
            'foto' =>'download__2_-removebg-preview.png',

        ]);
        product::create([
            'name' => 'lampu gantung',
            'harga' => '400000',
            'warna' => 'merah',
            'stok' => '2',
            'foto' =>'modern-ceiling-lamp.png',

        ]);
        product::create([
            'name' => 'meja',
            'harga' => '1.200.000',
            'warna' => 'hijau',
            'stok' => '7',
            'foto' =>'storage_night_table-removebg-preview.png',

        ]);
        product::create([
            'name' => 'sofa awan',
            'harga' => '5.200.000',
            'warna' => 'hijau',
            'stok' => '5',
            'foto' =>'Cloud_Sofa___The_Ultimate_Relaxation_Sofa_for_Your_Home-removebg-preview.png',

        ]);
        product::create([
            'name' => 'sofa awan',
            'harga' => '5.500.000',
            'warna' => 'putih',
            'stok' => '9',
            'foto' =>'Modern_Lazy_Sectional_Living_Room_Couches-removebg-preview.png',

        ]);





    }
}
