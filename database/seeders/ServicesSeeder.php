<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceReservation;

class ServicesSeeder extends Seeder{

    public function run(){
        Service::factory()->create([
            'name'=>'Laundry',
            'cover_image'=>'shirt'
        ]);

        Service::factory()->create([
            'name'=>'Personal Trainer',
            'cover_image'=>'bicycle'
        ]);

        Service::factory()->create([
            'name'=>'Dinner Table',
            'cover_image'=>'dinner'
        ]);

        Service::factory()->create([
            'name'=>'Beauty Salon',
            'cover_image'=>'store'
        ]);

        Service::factory()->create([
            'name'=>'Conference Room',
            'cover_image'=>'apartment'
        ]);

        Service::all()->each(function(Service $service){
            $service->reservations()->saveMany(
                ServiceReservation::factory()->count(10)->make()
            );
        });


    }
}
