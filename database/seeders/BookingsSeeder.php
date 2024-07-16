<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $UerID = DB::table('Users')->pluck('id')->toArray();
        $RoomID =DB::table('Rooms')->pluck('id')->toArray();

        $fake = Faker::create();
        foreach(range(01 , 5) as $index){
            DB::table('Bookings')->insert([
                'User_id'=>$fake->randomElement($UerID),
                'Room_id'=>$fake->randomElement($RoomID),
                'Check_in'=>$fake->dateTime(),
                'Check_out'=>$fake->dateTime(),
                'total_price'=>$fake->randomFloat(3, 10 , 100),
            ]);
        }
    }
}
