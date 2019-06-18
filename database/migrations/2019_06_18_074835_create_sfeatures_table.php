<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sfeatures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_sprint');
            $table->unsignedInteger('id_pfeature');
            $table->tinyInteger('priority');
            $table->foreign('id_sprint')->references('id')->on('sprints')->onDelete('cascade');
            $table->foreign('id_pfeature')->references('id')->on('pfeatures')->onDelete('cascade');
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
        Schema::dropIfExists('sfeatures');
    }
}
