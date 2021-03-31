<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produtos;
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

$factory->define(Produtos::class, function (Faker $faker) {
    return [
        'nome' => $faker->shuffleString($string = 'Camiseta', $encoding = 'UTF-8'),
        'cor' => $faker->shuffleString($string = 'Branca', $encoding = 'UTF-8'),
        'tamanho' => $faker->shuffleString($string = 'GG', $encoding = 'UTF-8'),
        'valor' => $faker->price(100, 200, true, true)
    ];
});
