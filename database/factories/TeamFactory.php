<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teamImage = [
            'dummy/avatar1.png',
            'dummy/avatar2.png',
            'dummy/avatar3.png',
            'dummy/avatar4.png',
        ];
        return [
            //
            'image' => $this->faker->unique()->randomElement($teamImage),
            'name' => $this->faker->name(),
            'job_title' => $this->faker->jobTitle(),
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
            'linkedin' => $this->faker->url,
        ];
    }
}
