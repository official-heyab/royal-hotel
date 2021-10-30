<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;

class HallReservationFactory extends Factory{

    public function definition(){
        return [
            'departure' => $this->faker->dateTimeBetween('+1 month', '+2 month'),
            'status' => 0,
            'remark' => $this->faker->realText(),
            'reservation_id' => function () {
                return Reservation::factory()->create()->id;
            },
        ];
    }


}
