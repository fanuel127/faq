<?php

namespace Database\Factories;
use App\Models\category;
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
    public function definition():array
    {
        $categoryIds = category::pluck('id')->toArray();
        return [
            'questionName'=>fake()->sentence(),
            'description' => fake()->paragraph(),
            'category_id'=> fake()->randomElement($categoryIds),
            'answer'=> fake()->sentence(),
            'photo'=> fake()->imageUrl(),
            'video'=> fake()->Url(),


        ];
    }
}
