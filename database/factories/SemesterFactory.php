<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Semester;
use Faker\Generator as Faker;
use illuminate\support\Str;

$factory->define(Semester::class, function (Faker $faker) {
    return [
            'student_id' => $faker->numberBetween($min = 1000, $max = 9999999999999),
            'course_code' => $faker->numberBetween($min = 100, $max = 999),
            'teachers' => $faker->name,
    ];
});
