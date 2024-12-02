<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = WeightLog::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,2),
            'date' => $this->faker->dateTimeBetween('-3 week'),
            'weight' => $this->faker->randomFloat(1,50,80),
            'calories' => $this->faker->numberBetween(1000,3000),
            'exercise_time' => $this->faker->time('H字i分'),
            'exercise_content' => $this->faker->text(120)
        ];
    }
}
