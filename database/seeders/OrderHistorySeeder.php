<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderHistorySeeder extends Seeder
{
    public function run()
    {
        DB::table('orders_history')->insert([

            [
                'id_menu' => 1,
                'id_pelanggan' => 1,
                'id_meja' => 1,
                'id_karyawan' => 1,
                'id_reservasi' => null,
                'tipe_order' => 'dine_in',
                'tgl_order' => Carbon::now()->subDays(2),
                'status_order' => 'selesai',
                'total_harga' => 85000,
            ],

            [
                'id_menu' => 2,
                'id_pelanggan' => 2,
                'id_meja' => 2,
                'id_karyawan' => 1,
                'id_reservasi' => null,
                'tipe_order' => 'takeaway',
                'tgl_order' => Carbon::now()->subDay(),
                'status_order' => 'selesai',
                'total_harga' => 65000,
            ],

            [
                'id_menu' => 3,
                'id_pelanggan' => 3,
                'id_meja' => 3,
                'id_karyawan' => 2,
                'id_reservasi' => null,
                'tipe_order' => 'dine_in',
                'tgl_order' => Carbon::now(),
                'status_order' => 'diproses',
                'total_harga' => 120000,
            ],

        ]);
    }
}