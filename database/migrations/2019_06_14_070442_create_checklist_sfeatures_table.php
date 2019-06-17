<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistSfeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_sprint');
            $table->integer('id_ffeature');
            $table->primary(['id_ffeature','id_sprint']);
            $table->tinyint('priority');
            $table->foreign('id_sprint')->references('id')->on('sprints')->onDelete('cascade');
            $table->foreign('id_ffeature')->references('id')->on('ffeatures')->onDelete('cascade');
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
