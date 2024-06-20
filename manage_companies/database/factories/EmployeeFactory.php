<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fist_name' => $this->faker->fist_name(),
            'last_name' => $this->faker->last_name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phone(),
            'company_id' => $this->faker->company_id(),
 
        ];
    }
}
