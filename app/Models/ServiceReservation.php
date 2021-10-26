<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceReservation extends Model{
    use HasFactory;

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }


}
