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
            $table->string('no');
            $table->string('nama_kapal');
            $table->string('keberangkatan');
            $table->string('nama_kru');
            $table->string('tujuan');
            $table->string('nama_penyewa');
            $table->string('mulai_sewa');
            $table->string('image')->nullable();
            $table->string('sewa_selesai');
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
