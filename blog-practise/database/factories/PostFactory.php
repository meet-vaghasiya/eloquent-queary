<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'content' => $this->faker->text(1000),
            'created_at' => $this->faker->dateTimeBetween('-25 years', 'now'),
            'category_id' => mt_rand(1, Category::all()->count())

        ];
    }
}
