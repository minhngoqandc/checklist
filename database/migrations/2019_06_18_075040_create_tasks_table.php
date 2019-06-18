<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mem');
            $table->unsignedInteger('id_sfeature');
            $table->string('task_code');
            $table->string('tittle');
            $table->timestamp('deadline');
            $table->tinyInteger('priority');
            $table->tinyInteger('status');
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
