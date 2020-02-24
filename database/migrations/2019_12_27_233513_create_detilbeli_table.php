<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetilbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detilbeli', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_beli');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah');
            $table->timestamps();
            $table->index('id_beli');
            $table->index('id_barang');
            $table->foreign('id_beli')->references('id')->on('beli')->onUpdate('cascade')->onDelete('restrict');;
            $table->foreign('id_barang')->references('id')->on('barang')->onUpdate('cascade')->onDelete('restrict');;


                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detilbeli');
    }
}
