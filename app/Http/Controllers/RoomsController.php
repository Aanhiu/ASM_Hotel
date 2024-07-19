<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    // getListRooms ra danh sach
    public function getListRooms()
    {
        // code get all rooms la list
        // join lay ten loai phong sau
        $Rooms = DB::table('Rooms')
            ->join('KindRooms', 'Rooms.KindRoom_id', '=', 'KindRooms.id')
            ->select('Rooms.*', 'KindRooms.name as kindroom_name')
            ->get();

        return view('Rooms.list', compact('Rooms'));
    }

    // dieu huong de trang them moi
    public function create()
    {
        // lay loai phong ra
        $allKindRooms = DB::table('KindRooms')->select('KindRooms.name as kindroom_name')->get();
        return view('Rooms.create' , compact('allKindRooms'));
    }

    // code ấn mút thêm mới add new Rooms 
    public function storeRooms(Request $request)
    {
       
        
         

    }
}
