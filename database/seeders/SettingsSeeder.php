<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder{

    public function run(){
        $setting = new Setting;
        $setting->name = "enable_service_reservations";
        $setting->value = "1";
        $setting->save();

        $setting = new Setting;
        $setting->name = "enable_room_reservations";
        $setting->value = "1";
        $setting->save();




    }
}
