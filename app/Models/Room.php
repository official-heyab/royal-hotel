<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model{
    use HasFactory;

    public function reservations(){
        return $this->hasMany(RoomReservation::class);
    }

    public function peopleWaiting(){
        return $this->reservations->where('status', 0)->count();
    }


}
