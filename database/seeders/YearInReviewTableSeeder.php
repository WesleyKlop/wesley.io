<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\YearInReview;
use Illuminate\Database\Seeder;

class YearInReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([2014, 2015, 2016, 2017, 2018])->each(fn (int $year) => YearInReview::factory()->create([
            'year' => $year,
        ]));

        YearInReview::create([
            'year' => 2019,
            'text' => 'At the beginning of this year I started my first real development job as a web developer at
    <a href="https://inthere.nl" rel="nofollow noreferrer" target="_blank">InThere</a>. At this company I am
    developing and maintaining a web application that I helped migrate from a custom framework to Laravel!
    I also finished my board year as treasurer at the study association which was a lot of fun.
  ',
        ]);
    }
}
