<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->integer('id_mem');
            $table->integer('id_sfeature');
            $table->boolean('status');
            $table->timestamps('deadline')->date("Y.m.d");
            $table->string('task_code');
            $table->tinyint('priority');
            $table->string('tittle');
            $table->foreign('id_mem')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_sfeature')->references('id')->on('sfeatures')->onDelete('cascade');
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
        Schema::dropIfExists('tasks');
    }
}
