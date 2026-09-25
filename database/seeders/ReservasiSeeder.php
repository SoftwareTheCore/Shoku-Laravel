<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservasi')->insert([

            [
                'id_pelanggan' => 1,
                'id_meja' => 1,
                'tgl_booking' => Carbon::now()->addDays(1),
                'jumlah_orang' => 2,
                'status' => 'confirmed',
            ],

            [
                'id_pelanggan' => 2,
                'id_meja' => 2,
                'tgl_booking' => Carbon::now()->addDays(2),
                'jumlah_orang' => 4,
                'status' => 'confirmed',
            ],

            [
                'id_pelanggan' => 3,
                'id_meja' => 3,
                'tgl_booking' => Carbon::now()->addDays(3),
                'jumlah_orang' => 6,
                'status' => 'pending',
            ],

        ]);
    }
}