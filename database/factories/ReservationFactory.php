<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory{

    public function definition(){
        return [
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'arrival' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
        ];
    }


}
