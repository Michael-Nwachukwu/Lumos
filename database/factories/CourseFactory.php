<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'coursename'=> $this->faker->sentence(),
            'courseprice'=> $this->faker->randomDigit(),
            // 'courseteacher'=> $this->faker->name(),
            'description'=> $this->faker->paragraph(),
            // 'teacheremail' => fake()->unique()->safeEmail(),
            // 'teacherphone' => fake()->phoneNumber(),jju
        ];
    }
}
