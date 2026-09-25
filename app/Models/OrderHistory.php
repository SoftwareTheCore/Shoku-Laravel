<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'orders_history';

    protected $primaryKey = 'id_order';

    public $timestamps = false;

    protected $fillable = [
        'id_menu',
        'id_pelanggan',
        'id_meja',
        'id_karyawan',
        'id_reservasi',
        'tipe_order',
        'tgl_order',
        'status_order',
        'total_harga',
    ];
}