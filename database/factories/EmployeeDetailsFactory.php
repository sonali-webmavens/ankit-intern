<?php

namespace Database\Factories;

use App\Models\EmployeeDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeDetails>
 */
class EmployeeDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeDetails::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'working_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'total_hours' => $this->faker->numberBetween(40, 80),
        ];
    }
}
