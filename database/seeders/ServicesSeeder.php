<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceReservation;

class ServicesSeeder extends Seeder{

    public function run(){
        Service::factory()->count(5)->create();

        Service::all()->each(function(Service $service){
            $service->reservations()->saveMany(
                ServiceReservation::factory()->count(10)->make()
            );
        });

        // $service->name = "Laundry";
        // $service->cover_image = "laundry.jpg";

        // $service->name = "Table";
        // $service->cover_image = "table.jpg";

        // $service->name = "Beauty Salon";
        // $service->cover_image = "beauty.jpg";

        // $service->name = "Personal Trainer";
        // $service->cover_image = "trainer.jpg";

        // $service->name = "Conference Room";
        // $service->cover_image = "conference.jpg";



    }
}
