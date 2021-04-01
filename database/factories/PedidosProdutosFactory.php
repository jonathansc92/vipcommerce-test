<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PedidosProdutos;
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

$factory->define(PedidosProdutos::class, function (Faker $faker) {
    return [
        'pedidos_id' => $faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
        'produtos_id' => $faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
        'quantidade' => $faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
    ];
});
