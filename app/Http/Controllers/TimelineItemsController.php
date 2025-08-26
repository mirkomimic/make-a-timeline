<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimelineItemsController extends Controller
{
  public function index(int $id)
  {
    $timeline = Timeline::findOrFail($id);

    $items = $timeline->items()
      ->orderBy('sort_order_num', 'asc')
      ->paginate(5);

    return Inertia::render("Timeline/Items/Index", [
      'timelineId' => $timeline->id,
      'timelineItems' => $items,
    ]);
  }
}
