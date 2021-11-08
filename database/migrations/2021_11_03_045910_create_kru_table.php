<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kru', function (Blueprint $table) {
            $table->id(); 
            $table->string('photo');
            $table->string('nama');
            $table->integer('phone');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['perempuan', 'laki-laki']);
            $table->string('identitas');
            $table->string('no_identitas');
            $table->string('provinsi');
            $table->string('kota');
            $table->integer('RT');
            $table->integer('RW');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->string('email');
            $table->string('nama_sertifikat');
            $table->string('no_sertifikat');
            $table->date('tgl_gabung');
            $table->string('status');
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
        Schema::dropIfExists('kru');
    }
}
