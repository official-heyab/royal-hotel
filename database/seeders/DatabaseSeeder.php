<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder{

    public function run(){
        $this->call([
            SettingsSeeder::class,
            RolesSeeder::class,
            RoomsSeeder::class,
            ServicesSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
