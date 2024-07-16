<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->id();
            $table->string('Comment' , 255);
            $table->string('image' , 255);
            $table->foreignId('User_id')->references('id')->on('Users');
            //$table->foreignId('Room_id')->references('id')->on('Rooms');
            $table->tinyInteger('Status')->default(1)->nullable(); // mac dinh la 1 da binh luan
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
        Schema::dropIfExists('Comments');
    }
}
