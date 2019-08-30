<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use App\Autor;
use Faker\Generator as Faker;

$autors = Autor::all();

$factory->define(Libro::class, function (Faker $faker) use ($autors){
    return [
        'nombre'=>$faker->firstName(),
        'resumen'=>$faker->realText(50),
        'npagina'=>$faker->numberBetween(1, 100),
        'edicion'=>$faker->randomDigitNotNull(),
        'precio'=>$faker->numberBetween(1, 999),
        'autor_id'=>$autors->shuffle()[0]->id
    ];
});
