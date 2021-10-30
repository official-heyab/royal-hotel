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
        $role->name = "Personal Trainer";
        $role->save();

        $role = new Role;
        $role->name = "Laundry Manager";
        $role->save();

        $role = new Role;
        $role->name = "Beauty Salon Manager";
        $role->save();

        $role = new Role;
        $role->name = "Wellness Manager";
        $role->save();
    }
}
