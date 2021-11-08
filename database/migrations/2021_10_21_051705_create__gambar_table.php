<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gambar', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('_gambar');
    }
}
