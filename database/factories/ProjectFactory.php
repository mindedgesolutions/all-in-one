<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $project = $this->faker->company() . ' App';
        $slug = Str::slug($project);

        return [
            'client_id' => $this->faker->numberBetween(1, 10),
            'project_name' => $project,
            'slug' => $slug,
            'start_date' => $this->faker->date(),
        ];
    }
}
