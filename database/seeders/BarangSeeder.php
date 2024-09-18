<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori 1: Konsumsi
            [
                'kategori_id' => 1,
                'barang_kode' => 'KS01', 
                'barang_nama' => 'Chips A',
                'harga_beli' => '10000',
                'harga_jual' => '12000',
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'KS02', 
                'barang_nama' => 'Energy Drink B',
                'harga_beli' => '6000',
                'harga_jual' => '8000',
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'KS03', 
                'barang_nama' => 'Cookies C',
                'harga_beli' => '4000',
                'harga_jual' => '6000',
            ],

            // Kategori 2: Elektronik
            [
                'kategori_id' => 2,
                'barang_kode' => 'EK01', 
                'barang_nama' => 'Blender',
                'harga_beli' => '50000',
                'harga_jual' => '65000',
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'EK02', 
                'barang_nama' => 'Kulkas',
                'harga_beli' => '150000',
                'harga_jual' => '200000',
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'EK03', 
                'barang_nama' => 'Lampu LED',
                'harga_beli' => '20000',
                'harga_jual' => '25000',
            ],

            // Kategori 3: Furniture
            [
                'kategori_id' => 3,
                'barang_kode' => 'FN01', 
                'barang_nama' => 'Meja Kantor',
                'harga_beli' => '60000',
                'harga_jual' => '75000',
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'FN02', 
                'barang_nama' => 'Kursi Ergonomis',
                'harga_beli' => '30000',
                'harga_jual' => '40000',
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'FN03', 
                'barang_nama' => 'Rak Buku',
                'harga_beli' => '35000',
                'harga_jual' => '45000',
            ],

            // Kategori 4: Kecantikan
            [
                'kategori_id' => 4,
                'barang_kode' => 'KC01', 
                'barang_nama' => 'Masker Wajah',
                'harga_beli' => '80000',
                'harga_jual' => '95000',
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'KC02', 
                'barang_nama' => 'Pelembab',
                'harga_beli' => '30000',
                'harga_jual' => '35000',
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'KC03', 
                'barang_nama' => 'Lip Balm',
                'harga_beli' => '20000',
                'harga_jual' => '25000',
            ],

            // Kategori 5: Kesehatan
            [
                'kategori_id' => 5,
                'barang_kode' => 'KH01', 
                'barang_nama' => 'Obat Batuk',
                'harga_beli' => '30000',
                'harga_jual' => '35000',
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'KH02', 
                'barang_nama' => 'Vitamin C',
                'harga_beli' => '20000',
                'harga_jual' => '25000',
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'KH03', 
                'barang_nama' => 'Plester',
                'harga_beli' => '15000',
                'harga_jual' => '20000',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
