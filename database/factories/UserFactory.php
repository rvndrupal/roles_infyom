<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

    $ur = ['Unidad 1', 'Unidad 2'];
    $ue = ['Ejecutora 1', 'Ejecutora 2'];

    return [
        'name' => $faker->name,
        'username' =>$faker->name,
        'ur' =>$ur[rand(0,1)],
        'ue' =>$ue[rand(0,1)],
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
