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
        $dataPool = [
            1 => [ // Makanan
                ['nama' => 'Indomie Goreng Spesial', 'desc' => 'Mie instan goreng favorit.'],
                ['nama' => 'Chitato Sapi Panggang', 'desc' => 'Keripik kentang rasa sapi panggang.'],
                ['nama' => 'Sari Roti Gandum', 'desc' => 'Roti tawar gandum sehat dan bergizi.'],
                ['nama' => 'Taro Net Seaweed', 'desc' => 'Snack ringan renyah rasa rumput laut.'],
            ],
            2 => [ // Minuman
                ['nama' => 'Aqua Botol 600ml', 'desc' => 'Air mineral pegunungan asli.'],
                ['nama' => 'Pocari Sweat 500ml', 'desc' => 'Minuman isotonik pengganti ion tubuh.'],
                ['nama' => 'Teh Pucuk Harum 350ml', 'desc' => 'Minuman teh melati segar dalam botol.'],
                ['nama' => 'Ultra Milk Coklat 250ml', 'desc' => 'Susu UHT rasa coklat.'],
            ],
            3 => [ // ATK
                ['nama' => 'Buku Tulis Sinar Dunia 38 Lembar', 'desc' => 'Buku tulis bergaris kualitas premium.'],
                ['nama' => 'Pulpen Faster C600 Hitam', 'desc' => 'Pulpen tinta hitam anti macet.'],
                ['nama' => 'Pensil 2B Faber Castell', 'desc' => 'Pensil khusus ujian komputer.'],
                ['nama' => 'Kertas HVS A4 PaperOne', 'desc' => 'Kertas print A4 80gsm.'],
            ],
            4 => [ // Sayuran
                ['nama' => 'Bayam Hijau Segar', 'desc' => 'Bayam hijau hidroponik kaya zat besi.'],
                ['nama' => 'Wortel Brastagi', 'desc' => 'Wortel manis dan renyah cocok untuk sayur.'],
                ['nama' => 'Brokoli Hijau', 'desc' => 'Brokoli segar kaya vitamin.'],
                ['nama' => 'Tomat Merah', 'desc' => 'Tomat merah segar untuk bumbu masakan.'],
            ],
            5 => [ // Buah
                ['nama' => 'Apel Fuji', 'desc' => 'Apel manis, garing, dan segar.'],
                ['nama' => 'Pisang Cavendish Sunpride', 'desc' => 'Pisang kuning mulus kualitas ekspor.'],
                ['nama' => 'Jeruk Medan', 'desc' => 'Jeruk manis dengan banyak kandungan air.'],
                ['nama' => 'Mangga Harum Manis', 'desc' => 'Mangga matang pohon rasanya sangat manis.'],
            ],
            6 => [ // Aksesoris
                ['nama' => 'Gelang Paracord Hitam', 'desc' => 'Gelang tali gunung yang sangat kuat.'],
                ['nama' => 'Topi Baseball Polos Hitam', 'desc' => 'Topi kasual dengan bahan canvas tebal.'],
                ['nama' => 'Kacamata Anti Radiasi', 'desc' => 'Kacamata pelindung dari layar monitor.'],
                ['nama' => 'Gantungan Kunci Kulit', 'desc' => 'Gantungan kunci elegan desain simpel.'],
            ],
            7 => [ // Elektronik
                ['nama' => 'Flashdisk SanDisk Cruzer 32GB', 'desc' => 'Penyimpanan data portabel.'],
                ['nama' => 'Mouse Wireless Logitech M170', 'desc' => 'Mouse tanpa kabel yang responsif.'],
                ['nama' => 'Kabel Data Baseus Type C', 'desc' => 'Kabel fast charging 3A awet.'],
                ['nama' => 'Earphone TWS Robot', 'desc' => 'Earphone bluetooth dengan suara jernih.'],
            ]
        ];

        $barangData = [];

        for ($i = 0; $i < 100; $i++) {
            $kategoriId = rand(1, 7);

            $item = $dataPool[$kategoriId][array_rand($dataPool[$kategoriId])];

            $kodeBarang = 'PRPM-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);

            $namaUnik = $item['nama'] . ' - Seri ' . rand(100, 999);

            $barangData[] = [
                'kode_barang' => $kodeBarang,
                'nama_barang' => $namaUnik,
                'deskripsi'   => $item['desc'],
                'stok'        => 300,
                'kategori_id' => $kategoriId,
                'harga'       => rand(10, 250) * 1000, // Harga kelipatan ribuan (10.000 s/d 250.000)
                'image'       => '',
            ];
        }

        foreach (array_chunk($barangData, 50) as $chunk) {
            Barang::insert($chunk);
        }
    }
}
