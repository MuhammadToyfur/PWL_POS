<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1
            [
                'supplier_id' => 1,
                'barang_id' => 1, 
                'user_id' => 1,
                'stok_tanggal' => '2024-09-11 08:00:00',
                'stok_jumlah' => '100',
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 2, 
                'user_id' => 1,
                'stok_tanggal' => '2024-09-11 08:15:00',
                'stok_jumlah' => '150',
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 3, 
                'user_id' => 1,
                'stok_tanggal' => '2024-09-11 08:30:00',
                'stok_jumlah' => '200',
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 4, 
                'user_id' => 1,
                'stok_tanggal' => '2024-09-11 08:45:00',
                'stok_jumlah' => '120',
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 5, 
                'user_id' => 1,
                'stok_tanggal' => '2024-09-11 09:00:00',
                'stok_jumlah' => '90',
            ],

            // Supplier 2
            [
                'supplier_id' => 2,
                'barang_id' => 6, 
                'user_id' => 2,
                'stok_tanggal' => '2024-09-11 09:15:00',
                'stok_jumlah' => '80',
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 7, 
                'user_id' => 2,
                'stok_tanggal' => '2024-09-11 09:30:00',
                'stok_jumlah' => '110',
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 8, 
                'user_id' => 2,
                'stok_tanggal' => '2024-09-11 09:45:00',
                'stok_jumlah' => '130',
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 9, 
                'user_id' => 2,
                'stok_tanggal' => '2024-09-11 10:00:00',
                'stok_jumlah' => '75',
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 10, 
                'user_id' => 2,
                'stok_tanggal' => '2024-09-11 10:15:00',
                'stok_jumlah' => '65',
            ],

            // Supplier 3
            [
                'supplier_id' => 3,
                'barang_id' => 11, 
                'user_id' => 3,
                'stok_tanggal' => '2024-09-11 10:30:00',
                'stok_jumlah' => '90',
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 12, 
                'user_id' => 3,
                'stok_tanggal' => '2024-09-11 10:45:00',
                'stok_jumlah' => '100',
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 13, 
                'user_id' => 3,
                'stok_tanggal' => '2024-09-11 11:00:00',
                'stok_jumlah' => '110',
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 14, 
                'user_id' => 3,
                'stok_tanggal' => '2024-09-11 11:15:00',
                'stok_jumlah' => '85',
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 15, 
                'user_id' => 3,
                'stok_tanggal' => '2024-09-11 11:30:00',
                'stok_jumlah' => '95',
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
