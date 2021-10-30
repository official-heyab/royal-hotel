<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hall;
use App\Models\HallReservation;

class HallsSeeder extends Seeder{

    public function run(){

        Hall::factory()->count(5)->create();

        Hall::all()->each(function(Hall $hall){
            $hall->reservations()->saveMany(
                HallReservation::factory()->count(10)->make()
            );
        });
    }
}
