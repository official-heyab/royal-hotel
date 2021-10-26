<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory{

    public function definition(){
        return [
            'name' => $this->faker->sentence(),
            'cover_image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(10,50),
            'description' => $this->faker->paragraph(),
        ];
    }


}
