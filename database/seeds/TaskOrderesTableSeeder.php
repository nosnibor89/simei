<?php

use Illuminate\Database\Seeder;

class TaskOrderesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Taskorder::class, 5)->create();
    }
}
