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
    return [
        'nombre' => $faker->name,
        'correo' => $faker->safeEmail,
        'cedula' => $faker->unique()->numberBetween($min = 1, $max = 100), // secret}
        'cargo_id' => App\Cargo::all()->random()->id,

    ];

});
