<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class HallFactory extends Factory{

    public function definition(){
        return [
            'name' => $this->faker->sentence(),
            'cover_image' => $this->faker->imageUrl(),
            'size' => $this->faker->numberBetween(1,20),
            'status' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(1,20),
            'description' => $this->faker->paragraph(),
        ];
    }


}
