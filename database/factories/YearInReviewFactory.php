<?php

declare(strict_types=1);

namespace Database\Factories;

use App\YearInReview;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class YearInReviewFactory extends Factory
{
    protected $model = YearInReview::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'year' => $this->faker->randomNumber(),
            'text' => $this->faker->realText(),
        ];
    }
}
