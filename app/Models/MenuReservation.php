<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuReservation extends Model{
    use HasFactory;

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }



}
