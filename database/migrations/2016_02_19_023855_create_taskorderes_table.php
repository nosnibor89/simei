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
            $table->integer('user_id')->unsigned();
            $table->string('title',50);
            $table->integer('fail_id')->unsigned();
            $table->string('desription', 100);
            $table->integer('status_id')->unsigned();
            $table->integer('technician_id')->unsigned()->nullable();
            $table->dateTime('startDate');
            $table->dateTime('closedDate')->nullable();
            $table->text('resolution')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fail_id')->references('id')->on('fails');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('technician_id')->references('id')->on('users');
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
