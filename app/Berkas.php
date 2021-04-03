<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas';
    protected $fillable = [
        'nomor_berkas',
        'nama_pemohon',
        'badan_usaha',
        'jenis_permohonan',
        'nama_bangunan',
        'alamat_bangunan'
    ];
}
