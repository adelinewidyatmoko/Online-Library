<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //tulis nama fieldnya terus pakei method faker
            'isbn'=>random_int(1000000000,9999999999),
            'title'=>$this->faker->sentence(),
            'author'=>$this->faker->name(),
            'image_path'=>$this->faker->imageUrl(),
            'publisher'=>$this->faker->company(),
            'category'=>$this->faker->word(),
            'pages'=>$this->faker->numberBetween(100,500),
            'language'=>$this->faker->languageCode(),
            'publish_date'=>$this->faker->dateTimeBetween('now','now'),
            'subjects'=>$this->faker->word(),
            'desc'=>$this->faker->paragraph(5),


        ];
    }
}
