<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(100, 5000),
            'amount' => $this->faker->numberBetween(10, 90),
            'created_at' => $this->faker->dateTimeBetween('-15 days', '-4 days'),
            'updated_at' => $this->faker->dateTimeBetween('-2 days', '1 minute')


        ];
    }
}
