<?php

namespace Database\Factories;

use App\Models\Timeline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimelineItem>
 */
class TimelineItemFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    static $sort_order_num = 1;

    return [
      'start' => $this->faker->numberBetween(1900, 2100),
      'end' => $this->faker->text(rand(100, 200)),
      'sort_order_num' => $sort_order_num++,
    ];
  }
}
