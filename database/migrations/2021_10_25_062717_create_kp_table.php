<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kp', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kapal');
            $table->string('keberangkatan');
            $table->string('kru_kapal');
            $table->string('tujuan');
            $table->string('nama_penyewa');
            $table->string('tgl_keberangkatan');
            $table->string('tgl_tiba');
            $table->string('keterangan');
            $table->string('photo');
            $table->string('nama_file');
            $table->string('no_izin');
            $table->string('tgl_terbitfile');
            $table->string('tgl_berakhirfile');
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
        Schema::dropIfExists('kp');
    }
}
