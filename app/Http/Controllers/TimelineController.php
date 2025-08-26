<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimelineController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $timeline = Timeline::query()->with('items', function ($query) {
      return $query->orderBy('sort_order_num', 'asc');
    })->findOrFail($id);

    return Inertia::render('Timeline/Edit', [
      'timeline' => $timeline
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    // dd($request->all());

    return redirect()->route('timeline.edit', $id)->with('success', 'Timeline updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
