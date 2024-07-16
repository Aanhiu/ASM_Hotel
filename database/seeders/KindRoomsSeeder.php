<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;

class KindRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // fake dữ liệu
        $fake = Faker::create();
        foreach (range(1, 5) as $index) {
            DB::table('KindRooms')->insert([
                'name' => $fake->name,
                'description' => $fake->text,
            ]);
        }
    }
}
