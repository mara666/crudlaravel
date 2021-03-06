<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacto;
use Faker\Generator as Faker;

$factory->define(Contacto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name(),
        'email' => $faker->safeEmail(),
        'asunto'=>$faker->word(),
        'mensaje'=>$faker->realText(50),
    ];
});
