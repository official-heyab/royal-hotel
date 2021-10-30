<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymReservationsTable extends Migration{

    public function up(){
        Schema::create('gym_reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('service_id');
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
        Schema::dropIfExists('gym_reservations');
    }
}
