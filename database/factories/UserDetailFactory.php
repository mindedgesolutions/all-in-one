<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pastDate = $this->faker->dateTimeBetween('-50 year', '-18 year');
        $futureDate = $this->faker->dateTimeBetween('+10 year', '+20 year');
        $pastDateFormatted = $pastDate->format('Y-m-d');
        $futureDateFormatted = $futureDate->format('Y-m-d');

        return [
            'user_type_id' => rand(1, 3),
            'address_line_1' => $this->faker->numberBetween($min = 100, $max = 300),
            'address_line_2' => $this->faker->streetAddress(),
            'dob' => $pastDateFormatted,
            'dor' => $futureDateFormatted,
            'salary' => rand(10000, 100000)
        ];
    }
}
