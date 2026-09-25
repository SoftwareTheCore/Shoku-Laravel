<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Menu;
use App\Models\OrderHistory;
use App\Models\Reservasi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKaryawan = Karyawan::count();

        $totalMenu = Menu::count();

        $totalOrder = OrderHistory::count();

        $totalReservasi = Reservasi::count();

        $pemasukanHariIni = OrderHistory::whereDate(
            'tgl_order',
            today()
        )->sum('total_harga');

        return view('admin.dashboard', compact(
            'totalKaryawan',
            'totalMenu',
            'totalOrder',
            'totalReservasi',
            'pemasukanHariIni'
        ));
    }
}