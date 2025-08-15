<?php

namespace Database\Seeders;

use App\Models\Timeline;
use App\Models\TimelineItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i = 0; $i < 5; $i++) {
      Timeline::factory()->has(
        TimelineItem::factory()->count(rand(5, 20)),
        'items'
      )->create();
    }
  }
}
