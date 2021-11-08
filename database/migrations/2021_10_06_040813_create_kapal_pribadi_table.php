<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKapalPribadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapal_pribadi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kapal');
            $table->string('keberangkatan');
            $table->string('kru_kapal');
            $table->string('tujuan');
            $table->string('nama_penyewa');
            $table->string('tgl_keberangkatan');
            $table->string('sertifikat');
            $table->string('tgl_tiba');
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
        Schema::dropIfExists('kapal_pribadi');
    }
}
