<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceReservation;

use App\Models\LaundryReservation;
use App\Models\PersonalTrainerReservation;
use App\Models\DinnerTableReservation;
use App\Models\BeautySalonReservation;
use App\Models\GYMReservation;
use App\Models\SwimmingPoolReservation;

class ServicesSeeder extends Seeder{

    public function run(){
        //Laundry
        Service::factory()->create([
            'name'=>'Laundry',
            'cover_image'=>'shirt'
        ]);

        Service::find(Service::IS_LAUNDRY)->reservations()->saveMany(
            LaundryReservation::factory()->count(10)->make()
        );

        //Personal Trainer
        Service::factory()->create([
            'name'=>'Personal Trainer',
            'cover_image'=>'bicycle'
        ]);

        Service::find(Service::IS_PERSONAL_TRAINER)->reservations()->saveMany(
            PersonalTrainerReservation::factory()->count(10)->make()
        );

        //Dinner Table
        Service::factory()->create([
            'name'=>'Dinner Table',
            'cover_image'=>'dinner'
        ]);

        Service::find(Service::IS_DINNER_TABLE)->reservations()->saveMany(
            DinnerTableReservation::factory()->count(10)->make()
        );

        //Beauty Salon
        Service::factory()->create([
            'name'=>'Beauty Salon',
            'cover_image'=>'store'
        ]);

        Service::find(Service::IS_BEAUTY_SALON)->reservations()->saveMany(
            BeautySalonReservation::factory()->count(10)->make()
        );

        //GYM
        Service::factory()->create([
            'name'=>'GYM',
            'cover_image'=>'enter'
        ]);

        Service::find(Service::IS_GYM)->reservations()->saveMany(
            GYMReservation::factory()->count(10)->make()
        );

        //Swimming Pool
        Service::factory()->create([
            'name'=>'Swimming Pool',
            'cover_image'=>'drop'
        ]);

        Service::find(Service::IS_SWIMMING_POOL)->reservations()->saveMany(
            SwimmingPoolReservation::factory()->count(10)->make()
        );


        //Other Services
        $service = Service::factory()->create();
        $service->reservations()->saveMany(
            ServiceReservation::factory()->count(10)->make()
        );



    }
}
