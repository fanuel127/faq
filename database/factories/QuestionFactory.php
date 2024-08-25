<?php

namespace Database\Factories;
use  App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $categoryId = Category::pluck('id')->toArray();
        return [

           'questionName'=>fake()->sentence(),
            'category_id'=>fake()->randomElement($categoryId),
            'description'=>fake()->paragraph(),
            'answer' =>fake()->sentence(),
            'photo'=> fake()->imageUrl(),
            'video' => fake()->videoUrl(),
        ];
    }
}
