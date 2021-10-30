<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class MenuFactory extends Factory{

    public function definition(){
        return [
            'name' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(1,20),
            'description' => $this->faker->paragraph(),
            'isFood' => $this->faker->boolean(),
        ];
    }


}
