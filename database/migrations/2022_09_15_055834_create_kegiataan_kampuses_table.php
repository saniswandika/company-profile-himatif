<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiataanKampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiataan_kampuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->date('estimasi_jalan_kegiatan');
            $table->string('deskripsi_kegiatan');
            $table->string('file_kegiatan');
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
        Schema::dropIfExists('kegiataan_kampuses');
    }
}
