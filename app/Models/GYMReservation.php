<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GYMReservation extends Model{
    use HasFactory;
    protected $table="gym_reservations";

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }


}
