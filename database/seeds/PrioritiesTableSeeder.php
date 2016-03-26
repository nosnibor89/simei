<?php

use Illuminate\Database\Seeder;



class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Priority::class, 3)->create();
        DB::table('priorities')->insert([
                ["name" => "Alto", "description" => "algun texto"],
                ["name" => "Medio", "description" => "algun texto"],
                ["name" => "Bajo", "description" => "algun texto"],
        ]);
    }
}
