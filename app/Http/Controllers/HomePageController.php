<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Project;
use App\Skill;
use App\YearInReview;
use Carbon\CarbonImmutable;
use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index(): View
    {
        $birthDate = CarbonImmutable::createFromDate(1997, 12, 29);

        $skills = Skill::query()
            ->root()
            ->with('allChildren')
            ->get();

        $timelineItems = YearInReview::query()
            ->orderByDesc('year')
            ->take(5)
            ->get()
            ->keyBy('year');

        $projects = Project::query()->with('skills')->get();

        return view('index', [
            'age' => $birthDate->age,
            'skills' => $skills,
            'timeline' => $timelineItems,
            'projects' => $projects,
        ]);
    }
}
