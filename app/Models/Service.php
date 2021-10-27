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
    public const IS_CONFERENCE_ROOM = 5;

    public function reservations(){
        return $this->hasMany(ServiceReservation::class);
    }

    public function peopleWaiting(){
        return $this->reservations->where('status', 0)->count();
    }


}
