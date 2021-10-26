<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory{

    public function definition(){
        return [
            'name' => $this->faker->sentence(),
            'cover_image' => $this->faker->imageUrl(),
            'price_per_night' => $this->faker->numberBetween(100,500),
            'description' => $this->faker->paragraph(),
        ];
    }


}
