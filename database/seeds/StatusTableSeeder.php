<?php

use Illuminate\Database\Seeder;


class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('status')->insert([
               ["name" => "Abierta", "description" => "algun texto"],
               ["name" => "Cerrada", "description" => "algun texto"],
               ["name" => "Pausada", "description" => "algun texto"],
       ]);
    }
}
