<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderHistory;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Histori Order Keseluruhan
    |--------------------------------------------------------------------------
    */

    public function orders(Request $request)
    {
        $orders = OrderHistory::query()
            ->orderBy('tgl_order', 'desc')
            ->paginate(15);

        return view(
            'admin.history.orders',
            compact('orders')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Histori Booking
    |--------------------------------------------------------------------------
    */

    public function booking()
    {
        $booking = Reservasi::orderBy(
            'tgl_booking',
            'desc'
        )->paginate(15);

        return view(
            'admin.history.booking',
            compact('booking')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Histori Pesanan
    |--------------------------------------------------------------------------
    */

    public function pesanan()
    {
        $pesanan = OrderHistory::where(
            'tipe_order',
            'pesanan'
        )
        ->orderBy('tgl_order', 'desc')
        ->paginate(15);

        return view(
            'admin.history.pesanan',
            compact('pesanan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Histori Reservasi
    |--------------------------------------------------------------------------
    */

    public function reservasi()
    {
        $reservasi = Reservasi::orderBy(
            'tgl_booking',
            'desc'
        )->paginate(15);

        return view(
            'admin.history.reservasi',
            compact('reservasi')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Histori Pemasukan
    |--------------------------------------------------------------------------
    */

    public function pemasukan(Request $request)
    {
        $periode = $request->periode ?? 'harian';

        if ($periode == 'mingguan') {

            $pemasukan = OrderHistory::whereBetween(
                'tgl_order',
                [
                    now()->startOfWeek(),
                    now()->endOfWeek()
                ]
            )->sum('total_harga');

        } elseif ($periode == 'bulanan') {

            $pemasukan = OrderHistory::whereMonth(
                'tgl_order',
                now()->month
            )
            ->whereYear(
                'tgl_order',
                now()->year
            )
            ->sum('total_harga');

        } else {

            $pemasukan = OrderHistory::whereDate(
                'tgl_order',
                today()
            )->sum('total_harga');

        }

        return view(
            'admin.history.pemasukan',
            compact('pemasukan', 'periode')
        );
    }
}