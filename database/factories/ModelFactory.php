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
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Status::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text,
        'description' => $faker->paragraph(1),
    ];
});


$factory->define(App\Impact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text,
        'description' => $faker->paragraph(1),
    ];
});

$factory->define(App\Priority::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text,
        'description' => $faker->paragraph(1),
    ];
});

$factory->define(App\Technician::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Fail::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'priority' => $faker->numberBetween($min = 1, $max = 2),
        'impact' => $faker->numberBetween($min = 1, $max = 2),
    ];
});

$factory->define(App\Taskorder::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'desription' => $faker->title,
        'startDate' => $faker->dateTime($max = 'now'),
        'user' => $faker->numberBetween($min = 1, $max = 2),
        'technician' => $faker->numberBetween($min = 1, $max = 2),
        'fail' => $faker->numberBetween($min = 1, $max = 2),
        'status' => $faker->numberBetween($min = 1, $max = 2)
    ];
});
