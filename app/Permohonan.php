<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{

    protected $fillable = ['nomor_berkas', 'nama_pemohon', 'badan_usaha', 'permohonan', 'nama_bangunan', 'alamat_bangunan'];

}
