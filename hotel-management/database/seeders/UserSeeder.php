<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations =  User::factory()->count(10)->create()->each(function ($user) {
            $reservations = $user->reservations()->saveMany(Reservation::factory()->count(mt_rand(0, 5))->make());

            foreach ($reservations as $reservation) {
                $rooms_id = [];
                for ($i = 0; $i <= mt_rand(1, 4); $i++) {

                    array_push($rooms_id, mt_rand(1, 20));
                }

                $reservation->rooms()->attach($rooms_id, ['status' => (bool)random_int(0, 1)]);
            }
        });
    }
}
