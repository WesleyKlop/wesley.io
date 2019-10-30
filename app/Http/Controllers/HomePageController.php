<?php

namespace App\Http\Controllers;

use App\Skill;
use App\YearInReview;
use Carbon\CarbonImmutable;
use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index(): View
    {
        $birthDate = CarbonImmutable::createFromDate(1997, 12, 29);

        $skills = Skill
            ::root()
            ->with('allChildren')
            ->get();

        $timelineItems = YearInReview
            ::orderByDesc('year')
            ->take(5)
            ->get()
            ->keyBy('year');

        return view('index', [
            'age' => $birthDate->diffInYears(),
            'skills' => $skills,
            'timeline' => $timelineItems,
        ]);
    }
}
