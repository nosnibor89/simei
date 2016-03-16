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
        factory(App\Impact::class, 3)->create();
    }
}
