<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVidejaisatalgojumsdarbavietaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videjais_atalgojums_darbavieta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uznemums_id');
            $table->unsignedBigInteger('atalgojums_id');
            $table->foreign('uznemums_id')->references('id')->on('darbavieta');
            $table->foreign('atalgojums_id')->references('id')->on('atalgojums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videjais_atalgojums_darbavieta');
    }
}
