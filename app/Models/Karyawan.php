<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    protected $primaryKey = 'id_karyawan';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'jabatan',
        'no_hp',
        'alamat',
        'tgl_masuk',
        'status',
    ];
}