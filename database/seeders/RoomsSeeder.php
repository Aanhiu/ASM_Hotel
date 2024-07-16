<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $KindRoomID = DB::table('KindRooms')->pluck('id')->toArray(); // lay id cua bang KindRooms de fake du dieu
        $fake = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('Rooms')->insert([
                'name' => $fake->name,
                'image'=>$fake->image,
                'price'=>$fake->randomFloat(3 , 10 , 100),
                'description'=>$fake->text,
                'KindRoom_id'=>$fake->randomElement($KindRoomID),

            ]);
        }
    }
}
