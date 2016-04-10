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
            $table->integer('priority_id')->unsigned();
            $table->integer('impact_id')->unsigned();
            $table->timestamps();
            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->foreign('impact_id')->references('id')->on('impacts');
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
