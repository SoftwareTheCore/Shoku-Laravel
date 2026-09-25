<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';

    protected $primaryKey = 'id_reservasi';

    public $timestamps = false;

    protected $fillable = [
        'id_pelanggan',
        'id_meja',
        'tgl_booking',
        'jumlah_orang',
        'status',
    ];
}