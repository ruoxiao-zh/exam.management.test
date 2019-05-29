<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker) {
    return [
        'no'                       => random_int(10000000, 99999999),
        'exam_registration_number' => random_int(10000000, 99999999),
        'name'                     => $faker->name,
        'total_points'             => random_int(100, 999),
        'chinese'                  => random_int(0, 100),
        'mathematics'              => random_int(0, 100),
        'english'                  => random_int(0, 100),
        'science'                  => random_int(0, 100),
        'arts'                     => random_int(0, 100),
        'physical_education'       => random_int(0, 100),
        'discounts'                => random_int(0, 100),
        'physicochemical'          => random_int(0, 100),
        'information_technology'   => random_int(0, 100),
    ];
});
