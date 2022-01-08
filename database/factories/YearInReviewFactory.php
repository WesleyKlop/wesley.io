<?php

declare(strict_types=1);

/** @var Factory $factory */

use App\YearInReview;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(YearInReview::class, fn (Faker $faker) => [
    'year' => $faker->year,
    'text' => $faker->realText(),
]);
