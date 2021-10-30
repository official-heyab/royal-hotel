<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;

class BeautySalonReservationFactory extends Factory{

    public function definition(){
        return [
            'isMale' => $this->faker->boolean(),
            'status' => 0,
            'remark' => $this->faker->realText(),
            'reservation_id' => function () {
                return Reservation::factory()->create()->id;
            },
        ];
    }


}
