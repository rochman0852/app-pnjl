<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_transaksi')->primary();
            $table->integer('sub_total')->nullable();
            $table->unsignedBigInteger('id_costumer')->nullable();
            $table->foreign('id_costumer')->references('id')->on('costumers')->onDelete('NO ACTION')
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
        Schema::dropIfExists('transaksi');
    }
}
