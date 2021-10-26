<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ServiceFactory extends Factory{

    public function definition(){
        $icon = Arr::random(array('dinner','bicycle','shirt','car','construction','coffee-cup'));

        return [
            'name' => $this->faker->sentence(),
            'cover_image' => $icon,
            'price' => $this->faker->numberBetween(10,50),
            'description' => $this->faker->paragraph(),
        ];
    }


}
