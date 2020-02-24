<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_beli');
            $table->unsignedbiginteger('id_siswa');
            $table->integer('total');
            $table->string('foto');
            $table->index('id_siswa');
            $table->timestamps();
            $table->foreign('id_siswa')->references('id')->on('siswa')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beli');
    }
}
