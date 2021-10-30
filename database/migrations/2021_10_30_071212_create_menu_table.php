<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration{

    public function up(){
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price',9,3);
            $table->longText('description')->nullable();
            $table->boolean('isFood');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::dropIfExists('menu');
    }
}
