<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVidejaisatalgojumsprofesijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vid_atalgojums_profesija', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesija_id');
            $table->unsignedBigInteger('atalgojums_id');
            $table->foreign('profesija_id')->references('id')->on('profesija')->onDelete('cascade');
            $table->foreign('atalgojums_id')->references('id')->on('atalgojums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vid_atalgojums_profesija');
    }
}
