<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kelurahan');
            $table->integer('dum_truk');
            $table->integer('tangkasaki');
            $table->integer('roda3_pemkot');
            $table->integer('roda3_mandiri');
            $table->integer('roda3_bkm');
            $table->integer('roda3_swasta');
            $table->integer('becak');
            $table->integer('volume');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armada');
    }
}
