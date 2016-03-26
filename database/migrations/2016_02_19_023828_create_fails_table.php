<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('priority')->unsigned();
            $table->integer('impact')->unsigned();
            $table->timestamps();
            $table->foreign('priority')->references('id')->on('priorities');
            $table->foreign('impact')->references('id')->on('impacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fails');
    }
}
