<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;

class SwimmingPoolReservationFactory extends Factory{

    public function definition(){
        return [
            'status' => 0,
            'remark' => $this->faker->realText(),
            'reservation_id' => function () {
                return Reservation::factory()->create()->id;
            },
        ];
    }


}
