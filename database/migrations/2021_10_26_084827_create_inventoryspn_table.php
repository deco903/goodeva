<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryspnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoryspn', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('harga');
            $table->string('stock_awal')->default(0);
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
        Schema::dropIfExists('inventoryspn');
    }
}
