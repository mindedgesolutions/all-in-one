<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientContact>
 */
class ClientContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contact_person' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone_1' => '98'. rand(12345678, 99999999),
            'phone_2' => '98'. rand(12345678, 99999999),
        ];
    }
}
