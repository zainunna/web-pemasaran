<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('kasir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kasir');
            $table->string('nama'); 
            $table->unsignedBigInteger('id_users');
            $table->timestamps();
            $table->index('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_barang');
            $table->string('nama_barang');
            // $table->integer('harga');
            $table->string('foto');
            $table->unsignedBigInteger('id_kasir');
            $table->timestamps();
            $table->index('id_kasir');
            $table->foreign('id_kasir')->references('id')->on('kasir')->onUpdate('Cascade')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
        Schema::dropIfExists('kasi');
    }
}
