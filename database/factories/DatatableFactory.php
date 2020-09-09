<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Datatable;
use Faker\Generator as Faker;

$factory->define(Datatable::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'team' => $faker->realText(10),
            'function' => $faker->realText(10),
    ];
});
