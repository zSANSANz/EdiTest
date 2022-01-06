<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peramalan extends Model
{
    protected $table = "peramalans";

    protected $fillable = [
        'tanggal_peramalan',
        'bulan_peramalan',
        'tahun_peramalan',
        'komponen',
        'golongan_darah',
        'hasil',
        'aktual',
        'mape'
    ];
}
