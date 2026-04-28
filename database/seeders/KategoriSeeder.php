<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriList = [
            ['nama_kategori' => 'Makanan'],
            ['nama_kategori' => 'Minuman'],
            ['nama_kategori' => 'ATK'],
            ['nama_kategori' => 'Sayuran'],
            ['nama_kategori' => 'Buah'],
            ['nama_kategori' => 'Aksesoris'],
            ['nama_kategori' => 'Elektronik'],
        ];

        foreach($kategoriList as $kategori){
            Kategori::create($kategori);
        }
    }
}