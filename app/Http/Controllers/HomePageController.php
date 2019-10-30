<?php

namespace App\Http\Controllers;

use App\Skill;
use Carbon\CarbonImmutable;
use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index(): View
    {
        $birthDate = CarbonImmutable::createFromDate(1997, 12, 29);
        $timestamp = CarbonImmutable::now();

        $skills = Skill
            ::root()
            ->with('allChildren')
            ->get();

        return view('index', [
            'age' => $birthDate->diffInYears(),
            'timestamp' => $timestamp,
            'skills' => $skills,
        ]);
    }
}
