<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tran', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('total');
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->foreign('id_barang')->references('id')->on('product')->onDelete('NO ACTION')
            ->onUpdate('CASCADE')->nullable();
            $table->unsignedBigInteger('id_tran')->nullable();
            $table->foreign('id_tran')->references('id_transaksi')->on('transaksi')->onDelete('NO ACTION')
            ->onUpdate('CASCADE')->nullable();
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
        Schema::dropIfExists('detail_tran');
    }
}
