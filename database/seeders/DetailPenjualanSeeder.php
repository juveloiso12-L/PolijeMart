<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail_penjualan;


class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail_penjualan::create([
            'penjualan_id' => 1,
            'barang_id' => 1,
            'jumlah' => 1,
            'harga' => 100000,
            'subtotal' => 100000
        ]);
    }
}
