<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'teacher_id' => $faker->numberBetween($min = 10000, $max = 99999999999),
            'email' => $faker->unique()->safeEmail,
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
