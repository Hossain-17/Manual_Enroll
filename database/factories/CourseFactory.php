<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'course_code' => $faker->numberBetween($min = 100, $max = 999),
        'credit' => $faker->numberBetween($min = 1, $max = 6),
    ];
});
