<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model{
    use HasFactory;

    public function roomsReserved(){
        return RoomReservation::where([
            ["reservation_id","=",$this->id],
            ["status","=",0]
        ])->get();
    }

    public function servicesReserved(){
        return ServiceReservation::where([
            ["reservation_id","=",$this->id],
            ["status","=",0]
        ])->get();
    }




}
