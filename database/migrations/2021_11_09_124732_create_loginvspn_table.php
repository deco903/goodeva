<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginvspnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginvspn', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('status');
            $table->datetime('waktu');
            $table->string('nama_barang');
            $table->integer('stock_awal')->nullable(0);
            $table->integer('stock');
            $table->string('choose')->default(' ');
            $table->integer('update_stock')->default(0);
            $table->string('unit');
            $table->string('type');
            $table->integer('total_stock');
            $table->text('text');
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
        Schema::dropIfExists('loginvspn');
    }
}
