<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundryReservationsTable extends Migration{

    public function up(){
        Schema::create('laundry_reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('service_id');
            $table->string('room_number');
            $table->string('room_code');
            $table->boolean('status');
            $table->longText('remark')->nullable();
            $table->timestamps();

            $table->foreign('reservation_id')
            ->references('id')
            ->on('reservations')
            ->onDelete('cascade');


            $table->foreign('service_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade');
        });
    }


    public function down(){
        Schema::dropIfExists('laundry_reservations');
    }
}
