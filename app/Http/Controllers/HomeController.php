<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
  public function index()
  {
    $timelines = Timeline::with('items')->get();

    return Inertia::render('Home', [
      'canLogin' => Route::has('login'),
      'canRegister' => Route::has('register'),
      'laravelVersion' => Application::VERSION,
      'phpVersion' => PHP_VERSION,
      'timelines' => $timelines
    ]);
  }
}
