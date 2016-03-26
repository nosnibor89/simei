<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        //Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(ImpactsTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
        $this->call(FailsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TaskOrderesTableSeeder::class);

        //Model::reguard();
    }
}
