<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
        'role' => 'user'
    ];
});

$factory->define(App\Status::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text(30),
        'description' => $faker->text(30),
    ];
});


$factory->define(App\Impact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text(30),
        'description' => $faker->text(30),
    ];
});

$factory->define(App\Priority::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text(30),
        'description' => $faker->text(30),
    ];
});

$factory->define(App\Fail::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'priority' => $faker->randomElement($array = array(1, 2)),
        'impact' => $faker->randomElement($array = array(1, 2)),
    ];
});

$factory->define(App\Taskorder::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'desription' => $faker->title,
        'startDate' => $faker->dateTime($max = 'now'),
        'user' => $faker->randomElement($array = array(1, 2)),
        'technician' => $faker->randomElement($array = array(1, 2)),
        'fail' => $faker->randomElement($array = array(1, 2)),
        'status' => $faker->randomElement($array = array(1, 2)),
    ];
});
