<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuReservationsTable extends Migration{

    public function up(){
        Schema::create('menu_reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('reservation_id');
            $table->boolean('isTable');
            $table->string('ordered_by');
            $table->boolean('status');
            $table->longText('remark')->nullable();
            $table->timestamps();

            $table->foreign('reservation_id')
            ->references('id')
            ->on('reservations')
            ->onDelete('cascade');

            $table->foreign('menu_id')
            ->references('id')
            ->on('menu')
            ->onDelete('cascade');
        });
    }


    public function down(){
        Schema::dropIfExists('menu_reservations');
    }
}
