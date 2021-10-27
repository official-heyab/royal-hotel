<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration{

    public function up(){
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_name');
            $table->string('phone_number');
            $table->date('arrival');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::dropIfExists('reservations');
    }
}
