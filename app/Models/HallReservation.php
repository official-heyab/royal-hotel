<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HallReservation extends Model{
    use HasFactory;

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function hall(){
        return $this->belongsTo(Hall::class);
    }



}
