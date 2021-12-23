<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kapal');
            $table->string('voy');
            $table->string('bendera');
            $table->string('gt');
            $table->string('port_asal');
            $table->date('tgl_kedatangan');
            $table->string('muatan_bongkar');
            $table->string('jenis_muatan');
            $table->date('tgl_keberangkatan');
            $table->string('tujuan');
            $table->string('muatan');
            $table->string('keterangan');
            $table->string('detail');
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
        Schema::dropIfExists('agency');
    }
}
