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
        $faker = \Faker\Factory::create();
        
       factory(App\Status::class,3)->create([
           
          "name" => $faker->name,
           "description" => $faker->paragraph(1),
               
          
       ]);
    }
}
