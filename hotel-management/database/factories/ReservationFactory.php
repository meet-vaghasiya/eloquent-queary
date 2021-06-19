<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'check_in' => $this->faker->dateTimeBetween('-2days', '+5days'),
            'check_out' => $this->faker->dateTimeBetween('+6days', '+10days'),
            'price' => $this->faker->numberBetween(100, 500)


        ];
    }
}
