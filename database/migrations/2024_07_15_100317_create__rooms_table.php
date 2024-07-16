<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->string('image',255);
            $table->decimal('price' , total:8 , places:3);
            $table->string('description' , 255);
            $table->foreignId('KindRoom_id')->references('id')->on('KindRooms');
            $table->foreignId('Comment_id')->references('id')->on('Comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rooms');
    }
}
