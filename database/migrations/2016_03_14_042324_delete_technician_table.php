<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteTechnicianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('taskorderes', function($table){
          $table->dropForeign('taskorderes_technician_foreign');
        });
        Schema::dropIfExists('technicians');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->timestamps();
            $table->foreign('technician')->references('id')->on('technicians');
        });
    }
}
