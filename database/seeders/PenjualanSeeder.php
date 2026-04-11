<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Logging\OpenTestReporting\Status;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjualan::create([
            'user_id' => 1,
            'tanggal_penjualan' => '2023-03-11',
            'total_bayar' => 100000,
            'status' => 'pending'
        ]);
    }
}
