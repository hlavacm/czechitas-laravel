<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->word($this->faker->numberBetween(2, 4), true);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->boolean() ? $this->faker->sentence() : null,
            'content' => $this->faker->paragraph(),
        ];
    }
}
