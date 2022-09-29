<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_jabatan', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('data_anggota_id')->unsigned();
        $table->integer('struktur_organisasi_id')->nullable()->unsigned();
        $table->foreign('data_anggota_id')->references('id')->on('data_anggotas');
        $table->foreign('struktur_organisasi_id')->references('id')->on('struktur_organisasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_jabatan');
    }
}
