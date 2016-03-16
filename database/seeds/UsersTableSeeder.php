<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert(array(
             array('name'=>'john','email'=>'john@clivern.com','password' => bcrypt('secret')),
             array('name'=>'mark','email'=>'mark@clivern.com','password' => bcrypt('secret')),
             array('name'=>'Karl','email'=>'karl@clivern.com','password' => bcrypt('secret')),
             array('name'=>'marl','email'=>'marl@clivern.com','password' => bcrypt('secret')),
             array('name'=>'mary','email'=>'mary@clivern.com','password' => bcrypt('secret')),
             array('name'=>'sels','email'=>'sels@clivern.com','password' => bcrypt('secret')),
             array('name'=>'taylor','email'=>'taylor@clivern.com','password' => bcrypt('secret')),

          ));
    }
}
