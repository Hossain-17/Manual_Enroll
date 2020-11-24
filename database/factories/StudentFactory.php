<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'student_id' => $faker->numberBetween($min = 1000, $max = 9999999999999),
            'email' => $faker->unique()->safeEmail,
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'semester'=> $faker->numberBetween($min = 1, $max = 8),
            'batch'=> $faker->numberBetween($min = 25, $max = 37),
            'adviser' => $faker->name,
    ];
});