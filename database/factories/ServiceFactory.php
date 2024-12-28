<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $icons = [
            'dummy/brand.svg',
            'dummy/budget.svg',
            'dummy/creativeAds.svg',
            'dummy/optimize.svg',
            'dummy/seo.svg',
            'dummy/social.svg',
        ];
        return [
            //
            'icon' => $this->faker->unique()->randomElement($icons),
            'title' => $this->faker->sentence(2),
            'subtitle' => $this->faker->sentence()
        ];
    }
}
