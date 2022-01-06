<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $table = "permintaans";

    protected $fillable = [
        'id_permintaan',
        'tanggal',
        'komponen',
        'golongan_darah',
        'rhesus',
        'jumlah_permintaan',
        'rs',
        'status'
    ];
}
