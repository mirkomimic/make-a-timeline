<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timeline>
 */
class TimelineFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'title' => $this->faker->sentence(rand(3, 6)),
      'description' => $this->faker->paragraph(rand(2, 4)),
      'alignment' => $this->faker->randomElement(['horizontal', 'vertical']),
      'visibility' => $this->faker->randomElement(['public', 'private']),
      // 'user_id' => 1,
      'created_at' => now(),
      'updated_at' => now(),
    ];
  }
}
