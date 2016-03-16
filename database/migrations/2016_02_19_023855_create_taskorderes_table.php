<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskorderesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskorderes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->string('title',50);
            $table->integer('fail')->unsigned();
            $table->string('desription', 100);
            $table->integer('status')->unsigned();
            $table->integer('technician')->unsigned();
            $table->dateTime('startDate');
            $table->dateTime('closedDate')->nullable();
            $table->timestamps();
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('fail')->references('id')->on('fails');
            $table->foreign('status')->references('id')->on('status');
            $table->foreign('technician')->references('id')->on('technicians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('taskorderes');
    }
}
