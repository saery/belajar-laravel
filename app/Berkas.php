<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
//
    protected $fillable = ['nomor_berkas', 'nama_pemohon', 'badan_usaha', 'jenis_permohonan', 'alamat_bangunan'];
}
