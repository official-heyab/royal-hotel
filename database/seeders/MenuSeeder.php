<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuReservation;

class MenuSeeder extends Seeder{

    public function run(){

        Menu::factory()->count(50)->create();

        Menu::all()->each(function(Menu $menu){
            $menu->reservations()->saveMany(
                MenuReservation::factory()->count(2)->make()
            );
        });
    }
}
