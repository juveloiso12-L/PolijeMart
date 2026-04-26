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
            ['nama_kategori' => 'Agro & Fresh'],
            ['nama_kategori' => 'Dairy'],
            ['nama_kategori' => 'Peternakan'],
            ['nama_kategori' => 'F&B / Bakery'],
            ['nama_kategori' => 'Kopi & Roastery'],
            ['nama_kategori' => 'Makanan Olahan'],
            ['nama_kategori' => 'Agro & Farm'],
            ['nama_kategori' => 'Air Minum'],
            ['nama_kategori' => 'Frozen Food'],
            ['nama_kategori' => 'Snack Tradisional'],
            ['nama_kategori' => 'Kopi Lokal'],
            ['nama_kategori' => 'Pakaian'],
            ['nama_kategori' => 'Aksesoris'],
            ['nama_kategori' => 'Alat Tulis Kantor'],
            ['nama_kategori' => 'Sembako'],
            ['nama_kategori' => 'FMCG - Makanan'],
            ['nama_kategori' => 'FMCG - Personal'],
        ];

        foreach($kategoriList as $kategori){
            Kategori::create($kategori);
        }
    }
}