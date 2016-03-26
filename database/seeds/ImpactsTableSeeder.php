<?php

use Illuminate\Database\Seeder;

class ImpactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Impact::class, 3)->create();
        DB::table('impacts')->insert([
                ["name" => "Alto", "description" => "algun texto"],
                ["name" => "Medio", "description" => "algun texto"],
                ["name" => "Bajo", "description" => "algun texto"],
        ]);
    }
}
