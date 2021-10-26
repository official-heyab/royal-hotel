<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\RoomReservation;

class RoomsSeeder extends Seeder{

    public function run(){
        Room::factory()->count(5)->create();

        Room::all()->each(function(Room $room){
            $room->reservations()->saveMany(
                RoomReservation::factory()->count(10)->make()
            );
        });

        // $room->name = "Double Deluxe Room";
        // $room->cover_image = "image/room1.jpg";
        // $room->price_per_night = 250;

        // $room->name = "Single Deluxe Room";
        // $room->cover_image = "image/room2.jpg";
        // $room->price_per_night = 200;

        // $room->name = "Honeymoon Suite";
        // $room->cover_image = "image/room3.jpg";
        // $room->price_per_night = 700;

        // $room->name = "Economy Double";
        // $room->cover_image = "image/room4.jpg";
        // $room->price_per_night = 200;


    }
}
