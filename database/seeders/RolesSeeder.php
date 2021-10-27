<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder{

    public function run(){
        $role = new Role;
        $role->name = "Admin";
        $role->save();

        $role = new Role;
        $role->name = "Chef";
        $role->save();

        $role = new Role;
        $role->name = "Trainer";
        $role->save();
    }
}
