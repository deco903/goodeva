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
            $table->string('keberangkatan');
            $table->string('nama_kapal');
            $table->string('tujuan');
            $table->string('nama_kru');
            $table->date('mulai_sewa');
            $table->string('nama_penyewa');
            $table->date('sewa_selesai');
            $table->string('image');
            $table->string('myfile');
            $table->string('nama_file');
            $table->string('nama_perizinan');
            $table->date('terbit_file');
            $table->date('akhir_file');
            $table->text('keterangan');
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
