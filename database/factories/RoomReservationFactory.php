<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;

class RoomReservationFactory extends Factory{

    public function definition(){
        return [
            'departure' => $this->faker->dateTimeBetween('+1 month', '+2 month'),
            'number_of_adults' => $this->faker->numberBetween(1,5),
            'number_of_children' => $this->faker->numberBetween(0,2),
            'status' => 0,
            'remark' => $this->faker->realText(),
            'reservation_id' => function () {
                return Reservation::factory()->create()->id;
            },
        ];
    }


}
