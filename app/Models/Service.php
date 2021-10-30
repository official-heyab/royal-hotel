<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model{
    use HasFactory;

    public const IS_LAUNDRY = 1;
    public const IS_PERSONAL_TRAINER = 2;
    public const IS_DINNER_TABLE = 3;
    public const IS_BEAUTY_SALON = 4;
    public const IS_GYM = 5;
    public const IS_SWIMMING_POOL = 6;

    public function reservations(){
        return $this->hasMany(ServiceReservation::class);
    }

    public function peopleWaiting(){
        if($this->id == Service::IS_LAUNDRY)
            return LaundryReservation::where('status', 0)->count();
        elseif($this->id == Service::IS_PERSONAL_TRAINER)
            return PersonalTrainerReservation::where('status', 0)->count();
        elseif($this->id == Service::IS_DINNER_TABLE)
            return DinnerTableReservation::where('status', 0)->count();
        elseif($this->id == Service::IS_BEAUTY_SALON)
            return BeautySalonReservation::where('status', 0)->count();
        elseif($this->id == Service::IS_GYM)
            return GYMReservation::where('status', 0)->count();
        elseif($this->id == Service::IS_SWIMMING_POOL)
            return SwimmingPoolReservation::where('status', 0)->count();
        else
            return $this->reservations->where('status', 0)->count();
    }


}
