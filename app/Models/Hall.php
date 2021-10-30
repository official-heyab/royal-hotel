<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hall extends Model{
    use HasFactory;

    public function reservations(){
        return $this->hasMany(HallReservation::class);
    }

    public function peopleWaiting(){
        return $this->reservations->where('status', 0)->count();
    }


}
