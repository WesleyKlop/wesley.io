<?php

namespace App\Http\Controllers;

use Carbon\CarbonImmutable;
use Illuminate\View\View;

class HomePageController extends Controller
{
  public function index(): View
  {
    $birthDate = CarbonImmutable::createFromDate(1997, 12, 29);
    $timestamp = CarbonImmutable::now();
    return view('index', [
      'age' => $birthDate->diffInYears(),
      'timestamp' => $timestamp,
    ]);
  }
}
