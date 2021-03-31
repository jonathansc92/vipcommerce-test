<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clientes;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Clientes::class, function (Faker $faker) {
    return [
        'nome' => $faker->shuffleString($string = 'Fulano de Tal', $encoding = 'UTF-8'),
        'cpf' => $faker->shuffleString($string = '12345678910', $encoding = 'UTF-8'),
        'sexo' => $faker->shuffleString($string = 'M', $encoding = 'UTF-8'),
        'email' => $faker->shuffleString($string = 'teste@teste.com', $encoding = 'UTF-8'),
    ];
});
