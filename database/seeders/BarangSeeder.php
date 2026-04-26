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
            'kode_barang' => 'TF-SGH-01',
            'nama_barang' => 'Melon Inthanon',
            'deskripsi' => 'Grade A, Hidroponik, Sangat Manis',
            'stok' => 100, // Dinamis (Siklus Panen)
            'harga' => 2000, // sesuaikan
            'kategori_id' => 6, // Agro & Fresh
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-MLK-01',
            'nama_barang' => 'Susu Pasteurisasi Polije',
            'deskripsi' => 'Original, Cokelat, Strawberry',
            'stok' => 100, // Harian
            'harga' => 5000,
            'kategori_id' => 6, // Dairy
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-FDL-01',
            'nama_barang' => 'Daging Sapi Segar',
            'deskripsi' => 'Potongan murni, higienis',
            'stok' => 100, // Mingguan
            'harga' => 3000,
            'kategori_id' => 7, // Peternakan
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-BAK-01',
            'nama_barang' => 'Kue Egg Roll SiP',
            'deskripsi' => 'Renyah, kemasan pouch/box',
            'stok' => 100, // Harian
            'harga' => 6000,
            'kategori_id' => 7, // F&B / Bakery
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-BAK-02',
            'nama_barang' => 'Roti Manis & Tawar',
            'deskripsi' => 'Cokelat, Keju, Sosis',
            'stok' => 100, // Harian
            'harga' => 10000,
            'kategori_id' => 8, // F&B / Bakery
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-KOP-01',
            'nama_barang' => 'Kopi Bubuk Robusta Polije',
            'deskripsi' => 'Tersertifikasi GMP, 200gr',
            'stok' => 100, // Stok Stabil
            'harga' => 9000,
            'kategori_id' => 8, // Kopi & Roastery
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-CAN-01',
            'nama_barang' => 'Sarden Kaleng Polije',
            'deskripsi' => 'Saus tomat, Saus pedas',
            'stok' => 100, // Batch Praktikum
            'harga' => 5000,
            'kategori_id' => 6, // Makanan Olahan
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'TF-AGR-01',
            'nama_barang' => 'Benih & Pupuk Organik',
            'deskripsi' => 'Pupuk kandang sapi, benih sayur',
            'stok' => 100, // Stok Stabil
            'harga' => 3000,
            'kategori_id' => 7, // Agro & Farm
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'LOC-JBR-01',
            'nama_barang' => 'Air Minum Al Qodiri',
            'deskripsi' => 'Gelas 240ml, Botol 600ml & 1.5L',
            'stok' => 100, // Stok Stabil
            'harga' => 3000,
            'kategori_id' => 8, // Air Minum
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'LOC-JBR-02',
            'nama_barang' => 'Edamame Jember',
            'deskripsi' => 'Edamame rebus siap makan',
            'stok' => 100, // Stok Stabil
            'harga' => 4000,
            'kategori_id' => 9, // Frozen Food
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'LOC-JBR-03',
            'nama_barang' => 'Suwar-Suwir & Tape',
            'deskripsi' => 'Camilan khas Jember berbagai rasa',
            'stok' => 100, // Dinamis
            'harga' => 7000,
            'kategori_id' => 10, // Snack Tradisional
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'LOC-JBR-04',
            'nama_barang' => 'Kopi Kahyangan/Lokal',
            'deskripsi' => 'Kopi rakyat khas Jember',
            'stok' => 100, // Stok Stabil
            'harga' => 8000,
            'kategori_id' => 11, // Kopi Lokal
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'LOG-KMP-01',
            'nama_barang' => 'Jas Almamater Polije',
            'deskripsi' => 'Ukuran S, M, L, XL, XXL',
            'stok' => 100, // Awal Semester
            'harga' => 7000,
            'kategori_id' => 12, // Pakaian
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'LOG-KMP-02',
            'nama_barang' => 'Topi & Dasi Polije',
            'deskripsi' => 'Atribut resmi ospek & sidang',
            'stok' => 100, // Awal Semester
            'harga' => 4000,
            'kategori_id' => 13, // Aksesoris
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'RET-ATK-01',
            'nama_barang' => 'Kertas HVS (A4/F4)',
            'deskripsi' => 'Eceran dan per Rim (70gsm/80gsm)',
            'stok' => 100, // Stok Stabil
            'harga' => 15000,
            'kategori_id' => 14, // Alat Tulis Kantor
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'RET-ATK-02',
            'nama_barang' => 'Alat Tulis Dasar',
            'deskripsi' => 'Pulpen, Spidol, Map Plastik',
            'stok' => 100, // Stok Stabil
            'harga' => 18000,
            'kategori_id' => 14, // Alat Tulis Kantor
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'RET-SBM-01',
            'nama_barang' => 'Beras Premium & Bulog',
            'deskripsi' => 'Kemasan 5kg',
            'stok' => 100, // Stok Stabil
            'harga' => 13000,
            'kategori_id' => 15, // Sembako
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'RET-SBM-02',
            'nama_barang' => 'Minyak Goreng',
            'deskripsi' => 'Kemasan Pouch 1L & 2L',
            'stok' => 100, // Stok Stabil
            'harga' => 5000,
            'kategori_id' => 15, // Sembako
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'RET-FMC-01',
            'nama_barang' => 'Mie Instan All Varian',
            'deskripsi' => 'Goreng, Kuah, Cup',
            'stok' => 100, // Stok Stabil
            'harga' => 9000,
            'kategori_id' => 16, // FMCG - Makanan
            'image' => '',
        ]);

        Barang::create([
            'kode_barang' => 'RET-FMC-02',
            'nama_barang' => 'Toiletries',
            'deskripsi' => 'Sabun, Sampo, Pasta Gigi',
            'stok' => 100, // Stok Stabil
            'harga' => 10000,
            'kategori_id' => 17, // FMCG - Personal
            'image' => '',
        ]);
    }
}
