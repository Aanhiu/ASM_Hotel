<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    // getListRooms ra danh sach
    public function getListRooms(){
        // code get all rooms la list

        $Rooms = DB::table('Rooms')->select('id' , 'name' , 'image' , 'price' , 'description' , 'KindRoom_id' , 'status')->get();
        return view('Rooms.list' , compact('Rooms'));
    }
}
