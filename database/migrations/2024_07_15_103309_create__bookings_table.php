<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->references('id')->on('Users');
            $table->foreignId('Room_id')->references('id')->on('Rooms');
            $table->dateTime('Check_in');
            $table->dateTime('Check_out');
            $table->tinyInteger('status')->default(1)->nullable(); // 1 là chờ xác nhận , 2 là đã xác nhận ,  3 là check in  , 4 là check out , 5 là đã chờ xác nhận in , 6 là chờ xác nhận check out  , 7 là đã xác nhận check in , 8 là đã xác nhận check out , 9 là đã hoàn thành
            $table->decimal('total_price' , total:8 , places:3);
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
        Schema::dropIfExists('Bookings');
    }
}
