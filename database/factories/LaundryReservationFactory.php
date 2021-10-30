<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;

class LaundryReservationFactory extends Factory{

    public function definition(){
        return [
            'room_number' => $this->faker->secondaryAddress(),
            'room_code' => $this->faker->buildingNumber(),
            'status' => 0,
            'remark' => $this->faker->realText(),
            'reservation_id' => function () {
                return Reservation::factory()->create()->id;
            },
        ];
    }


}
