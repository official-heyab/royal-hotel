<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model{
    use HasFactory;
    protected $table="menu";

    public function reservations(){
        return $this->hasMany(MenuReservation::class);
    }

    public function peopleWaiting(){
        return $this->reservations->where('status', 0)->count();
    }


}
