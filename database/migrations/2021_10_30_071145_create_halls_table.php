<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration{

    public function up(){
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image')->nullable();
            $table->string('size')->nullable();
            $table->decimal('price',9,3);
            $table->longText('description')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::dropIfExists('halls');
    }
}
