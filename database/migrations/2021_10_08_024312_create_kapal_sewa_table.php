<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKapalSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapal_sewa', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('nama_kapal');
            $table->string('owner');
            $table->string('penanggung_jawab');
            $table->string('kru_karyawan');
            $table->string('no_sertifikat');
            $table->string('keberangkatan');
            $table->string('image')->nullable();
            $table->string('tujuan');
            $table->string('tgl_berangkat');
            $table->string('tgl_datang');
            $table->string('keterangan');
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
        Schema::dropIfExists('kapal_sewa');
    }
}
