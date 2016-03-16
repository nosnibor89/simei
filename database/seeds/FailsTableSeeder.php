<?php

use Illuminate\Database\Seeder;

class FailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Fail::class, 3)->create();
    }
}
