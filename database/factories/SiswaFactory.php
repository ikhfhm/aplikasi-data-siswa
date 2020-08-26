<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama_depan' => $faker->name,
        'nama_belakang' => '',
        'jenis_kelamin' => $faker->randomElement(['L','P']),
        'agama' => $faker->randomElement(['Islam','Kriten', 'Katolik', 'Hindu', 'Budha']),
        'alamat' => $faker->adress,
    ];
});
