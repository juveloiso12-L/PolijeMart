<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Mie Sedaap Goreng',
            'deskripsi' => 'Mie instan kebanggan masyarakat Indonesia.',
            'stok' => 100,
            'harga' => 3000,
            'kategori_id' => 1,
        ]);

        Barang::create([
            'nama_barang' => 'Buku Tulis Sidu',
            'deskripsi' => 'Buku tulis yang digunakan untuk menulis.',
            'stok' => 500,
            'harga' => 2000,
            'kategori_id' => 3,
        ]);

        Barang::create([
            'nama_barang' => 'Air Mineral Aqua 600 ml',
            'deskripsi' => 'Minuman air mineral berbentuk botol berukuran 600 ml',
            'stok' => 300,
            'harga' => 5000,
            'kategori_id' => 2,
        ]);

        Barang::create([
            'nama_barang' => 'Teh Pucuk 350 ml',
            'deskripsi' => 'Teh manis dan memiliki aroma harum yang khas.',
            'stok' => 100,
            'harga' => 4000,
            'kategori_id' => 2,
        ]);
    }
}
