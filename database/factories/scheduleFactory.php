<?php

namespace Database\Factories;

use App\Models\schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class scheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CebuPacific' => $this->faker->word,
        'Date' => $this->faker->word,
        'Time' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
