<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            '/dummy/img1.jpg',
            '/dummy/img2.jpg',
            '/dummy/img3.jpg',
            '/dummy/img4.jpg',
            '/dummy/img5.jpg',
            '/dummy/img6.jpg',
            '/dummy/img7.jpg',
            '/dummy/img8.jpg',
            '/dummy/img9.jpg',
            '/dummy/img10.jpg',
        ];
        return [
            //
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(5),
            'image' => $this->faker->unique()->randomElement($images),
            'category_id' => \App\Models\PortfolioCategory::factory()->create()->id,
        ];
    }
}