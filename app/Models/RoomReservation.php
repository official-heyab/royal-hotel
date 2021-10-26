<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomReservation extends Model{
    use HasFactory;

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }



}
