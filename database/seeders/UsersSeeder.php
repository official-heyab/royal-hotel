<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersSeeder extends Seeder{

    public function run(){
        User::factory()->create([
            'email'=>'admin@royal.com',
            'role_id'=> Role::IS_ADMIN
        ]);

        User::factory()->create([
            'email'=>'trainer@royal.com',
            'role_id'=> Role::IS_TRAINER
        ]);

        User::factory()->create([
            'email'=>'chef@royal.com',
            'role_id'=> Role::IS_CHEF
        ]);


        User::factory()->count(5)->create();
    }
}
