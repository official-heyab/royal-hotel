<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model{
    use HasFactory;

    public const IS_ADMIN = 1;
    public const IS_CHEF = 2;
    public const IS_PERSONAL_TRAINER = 3;
    public const IS_LAUNDRY_MANAGER = 4;
    public const IS_BEAUTY_SALON_MANAGER = 5;
    public const IS_WELLNESS_MANAGER = 6;

    public function user(){
        return $this->hasMany(User::class);
    }




}
