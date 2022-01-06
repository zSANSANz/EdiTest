<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    protected $table = "pendonors";

    protected $fillable = [
        'id_pendonor',
        'no_ktp',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'status',
        'pekerjaan',
        'golongan_darah',
        'rhesus',
        'ibu_kandung',
        'no_telp'
    ];
}
