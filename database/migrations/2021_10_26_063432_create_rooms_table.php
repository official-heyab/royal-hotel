<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration{

    public function up(){
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image');
            $table->decimal('price_per_night',9,3);
            $table->longText('description');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::dropIfExists('rooms');
    }
}
