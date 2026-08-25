<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('tr_TR');
        $title = $faker->realText(50);
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'meta_title' => $title,
            'meta_description' => $faker->realText(150),
            'short_description' => $faker->realText(200),
            'content' => '<p>' . implode('</p><p>', $faker->paragraphs(6)) . '</p>',
            'is_active' => $faker->boolean(85),
            'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
