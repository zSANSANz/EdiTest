<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KantongDarah extends Model
{
    protected $table = "kantong_darahs";

    protected $fillable = [
        'id_kantong',
        'id_donor',
        'komponen',
        'tgl_kadaluarsa',
        'jenis',
        'status',
        'tanggal_keluar',
        'rs'
    ];
}
