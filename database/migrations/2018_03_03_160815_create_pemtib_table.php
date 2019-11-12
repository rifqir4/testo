<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemtibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemtib', function (Blueprint $table) {
            $table->increments('no');
            $table->string('kelurahan');
            $table->double('luas');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('jumlah_kk');
            $table->integer('pen_l');
            $table->integer('pen_p');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemtib');
    }
}
