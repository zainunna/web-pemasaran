<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_barang');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('jumlah');
            $table->integer('total');
            $table->string('nama_pembeli');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('foto');
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
        Schema::dropIfExists('jual');
    }
}
