<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePfeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pfeatures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pb');
            $table->tinyInteger('priority');
            $table->string('content');
            $table->foreign('id_pb')->references('id')->on('productbacklogs')->onDelete('cascade');
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
        Schema::dropIfExists('pfeatures');
    }
}
