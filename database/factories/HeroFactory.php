<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customAnimation = [
            "Online Marketing",
            "Web Design",
            "Mobile Apps",
            "Brand Identity"
        ];
        return [
            //
            'image' => 'dummy/hero.svg',
            'title' => $this->faker->sentence() . '|' . implode('#', $customAnimation),
            'subtitle' => $this->faker->sentence(),
            'link1' => $this->faker->url(),
            'link2' => $this->faker->url(),
            'isActive' => false
        ];
    }
}
