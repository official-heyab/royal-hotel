<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\RoomReservation;

class RoomsSeeder extends Seeder{

    public function run(){

        Room::factory()->create([
            'name'=>'Business Suite',
            'cover_image'=>'room1.jpg',
            'price_per_night'=>'157',
            'description' => '72 sqm, 2 Single Size Bed Balcony Living Room
            Sofa Dining Area Mini Bar Water Boiler Writing Desk Telephone –
            Direct Dial Bathroom Jacuzzi Vanity Hair Dryer Bath Robe
            Electronic Door Lock Safety deposit Box LED Television Wi-Fi
            Iron and Ironing Board - on request'
        ]);

        Room::factory()->create([
            'name'=>'Bussines Twin Room',
            'cover_image'=>'room2.jpg',
            'price_per_night'=>'278',
            'description' => '31.9 sqm, 2 Single Size Bed

            Balcony Living Area Sofa Mini Bar Water Boiler Writing Desk Telephone –
            Direct Dial Bathroom Shower Vanity Hair Dryer Bath Robe Electronic Door
            Lock Safety deposit Box
            LED Television WiFi Iron and Ironing Board - on request'
        ]);

        Room::factory()->create([
            'name'=>'Bussiness Double Room',
            'cover_image'=>'room3.jpg',
            'price_per_night'=>'177.65',
            'description' => '29 sqm, Double Size Bed

            Balcony Living Area Sofa Mini Bar Water Boiler Writing Desk Telephone –
            Direct Dial Bathroom Shower Vanity Hair Dryer Bath Robe Electronic Door
            Lock Safety deposit Box
            LED Television Wi-Fi Iron and Ironing Board - on request'
        ]);

        Room::factory()->create([
            'name'=>'Economy Junior Suite',
            'cover_image'=>'room4.jpg',
            'price_per_night'=>'387',
            'description' => '40 sqm, King Bed, City View

            Balcony Living Area Sofa Mini Bar Water Boiler Writing Desk Telephone –
            Direct Dial Bathroom Bathtub Vanity Hair Dryer Bath Robe Electronic Door
            Lock Safety deposit Box LED
            Television WiFi Iron and Ironing Board - on request'
        ]);

        Room::factory()->create([
            'name'=>'Economy Room',
            'cover_image'=>'room1.jpg',
            'price_per_night'=>'410',
            'description' => '19 sqm, Double Bed, City View

            Balcony Mini Bar Water Boiler Telephone – Direct Dial Bathroom Bathtub
            Vanity Hair Dryer Bath Robe Electronic Door Lock Safety deposit
            Box LED Television Wi-Fi Iron and Ironing Board - on request'
        ]);

        Room::factory()->create([
            'name'=>'Economy Twin Room',
            'cover_image'=>'room2.jpg',
            'price_per_night'=>'230',
            'description' => '29sqm, 2 Single Size Beds, City View

            Balcony Mini Bar Water Boiler Telephone – Direct Dial Bathroom Bathtub
            Vanity Hair Dryer Bath Robe Electronic Door Lock Safety deposit
            Box LED Television Wi-Fi Iron and Ironing Board - on request'
        ]);

        Room::factory()->create([
            'name'=>'Family Room',
            'cover_image'=>'room3.jpg',
            'price_per_night'=>'410',
            'description' => '74.7 sqm, Double Size Bed

            Balcony Two Separate Rooms Living Room Sofa Dining Area Mini Bar
             Water Boiler Writing Desk Telephone – Direct Dial Bathroom
             Shower Vanity Hair Dryer Bath Robe Electronic Door Lock Safety
             deposit Box LED Television WiFi Iron and Ironing Board - on
             request'
        ]);

        Room::all()->each(function(Room $room){
            $room->reservations()->saveMany(
                RoomReservation::factory()->count(10)->make()
            );
        });
    }
}
