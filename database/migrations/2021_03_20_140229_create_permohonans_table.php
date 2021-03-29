<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nomor_berkas', 9)->unique();
            $table->string('nama_pemohon');
            $table->string('badan_usaha');
            $table->string('permohonan');
            $table->string('nama_bangunan');
            $table->string('alamat_bangunan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonans');
    }
}
