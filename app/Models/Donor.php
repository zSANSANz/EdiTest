<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = "donors";

    protected $fillable = [
        'id_donor',
        'tanggal_donor',
        'no_ktp',
        'donor_ke',
        'donor_terakhir',
        'tempat_donor',
        'penyelenggara',
        'donor_apherensis',
        'hb',
        'hcc',
        'bb',
        'tensi_darah',
        'suhu_badan',
        'nadi',
        'nama_petugas'
    ];
}
