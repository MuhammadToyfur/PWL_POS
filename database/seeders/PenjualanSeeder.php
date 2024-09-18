<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1, 
                'penjualan_kode' => 'PJ1001',
                'pembeli' => 'Michael Scott',
                'penjualan_tanggal' => Carbon::now()->subDays(10),
            ],
            [
                'user_id' => 2, 
                'penjualan_kode' => 'PJ1002',
                'pembeli' => 'Pam Beesly',
                'penjualan_tanggal' => Carbon::now()->subDays(9),
            ],
            [
                'user_id' => 3, 
                'penjualan_kode' => 'PJ1003',
                'pembeli' => 'Jim Halpert',
                'penjualan_tanggal' => Carbon::now()->subDays(8),
            ],
            [
                'user_id' => 1, 
                'penjualan_kode' => 'PJ1004',
                'pembeli' => 'Dwight Schrute',
                'penjualan_tanggal' => Carbon::now()->subDays(7),
            ],
            [
                'user_id' => 2, 
                'penjualan_kode' => 'PJ1005',
                'pembeli' => 'Angela Martin',
                'penjualan_tanggal' => Carbon::now()->subDays(6),
            ],
            [
                'user_id' => 3, 
                'penjualan_kode' => 'PJ1006',
                'pembeli' => 'Stanley Hudson',
                'penjualan_tanggal' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 1, 
                'penjualan_kode' => 'PJ1007',
                'pembeli' => 'Oscar Martinez',
                'penjualan_tanggal' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 2, 
                'penjualan_kode' => 'PJ1008',
                'pembeli' => 'Kevin Malone',
                'penjualan_tanggal' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 3, 
                'penjualan_kode' => 'PJ1009',
                'pembeli' => 'Creed Bratton',
                'penjualan_tanggal' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 1, 
                'penjualan_kode' => 'PJ1010',
                'pembeli' => 'Toby Flenderson',
                'penjualan_tanggal' => Carbon::now()->subDay(),
            ],
        ];
        
        DB::table('t_penjualan')->insert($data);
    }
}
