<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtalgojumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atalgojums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uznemums_id');
            $table->unsignedBigInteger('lietotajs_id');
            $table->unsignedBigInteger('profesija_id');
            $table->foreign('uznemums_id')->references('id')->on('darbavieta')->onDelete('cascade');
            $table->foreign('lietotajs_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profesija_id')->references('id')->on('profesija')->onDelete('cascade');
            $table->double('alga', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atalgojums');
    }
}
