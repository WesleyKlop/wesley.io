<?php

/** @var Factory $factory */

use App\YearInReview;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(YearInReview::class, function (Faker $faker) {
    return [
        'year' => $faker->year,
        'text' => $faker->realText(),
    ];
});
