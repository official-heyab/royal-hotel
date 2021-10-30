<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallReservationsTable extends Migration{

    public function up(){
        Schema::create('hall_reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('hall_id');
            $table->date('departure');
            $table->boolean('status');
            $table->longText('remark')->nullable();
            $table->timestamps();

            $table->foreign('reservation_id')
            ->references('id')
            ->on('reservations')
            ->onDelete('cascade');

            $table->foreign('hall_id')
            ->references('id')
            ->on('halls')
            ->onDelete('cascade');
        });
    }


    public function down(){
        Schema::dropIfExists('hall_reservations');
    }
}
