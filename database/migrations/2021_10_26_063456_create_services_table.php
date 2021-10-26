<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration{

    public function up(){
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image');
            $table->decimal('price',9,3);
            $table->longText('description');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::dropIfExists('services');
    }
}