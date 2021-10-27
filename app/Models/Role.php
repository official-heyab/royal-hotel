<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model{
    use HasFactory;

    public const IS_ADMIN = 1;
    public const IS_CHEF = 2;
    public const IS_TRAINER = 3;




}
