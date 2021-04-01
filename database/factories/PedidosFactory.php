<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pedidos;
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

$factory->define(Pedidos::class, function (Faker $faker) {
    return [
        'data_pedido' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'observacao' => $faker->shuffleString($string = 'Apenas um teste de observacao do pedido', $encoding = 'UTF-8'),
        'clientes_id' => $faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
    ];
});
