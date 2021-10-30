<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder{

    public function run(){
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,

            SettingsSeeder::class,
            RoomsSeeder::class,
            ServicesSeeder::class,
            MenuSeeder::class,
            HallsSeeder::class,
        ]);
    }
}
