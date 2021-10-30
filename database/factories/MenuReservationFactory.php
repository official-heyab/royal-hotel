<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;

class MenuReservationFactory extends Factory{

    public function definition(){
        return [
            'isTable' => $this->faker->boolean(),
            'ordered_by' => $this->faker->address(),
            'status' => 0,
            'remark' => $this->faker->realText(),
            'reservation_id' => function () {
                return Reservation::factory()->create()->id;
            },
        ];
    }


}
