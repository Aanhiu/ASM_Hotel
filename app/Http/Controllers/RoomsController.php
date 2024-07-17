<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    // getListRooms ra danh sach
    public function getListRooms(){
        // code get all rooms la list

        // join lay ten loai phong sau
        //$Rooms = DB::table('Rooms')->select('id' , 'name' , 'image' , 'price' , 'description' , 'KindRoom_id' , 'status')->get();
        
        $Rooms = DB::table('Rooms')
                ->join('KindRooms', 'Rooms.KindRoom_id', '=', 'KindRooms.id')
                ->select('Rooms.*', 'KindRooms.name as kindroom_name')
                ->get();

    return view('Rooms.list', compact('Rooms'));
        //$Rooms = DB::table('Rooms')->join('KindRooms' , 'KindRoom_id' , '=' , 'KindRooms.id')->select('Rooms.*','name')->get();

        return view('Rooms.list' , compact('Rooms'));
        
    } 

    // dieu huong de trang them moi
    public function create(){
        return view('Rooms.create');
    }
    // ham them moi loai phong 
    public function createRooms(){
        // code them moi loai phong 
        $KindRoom_id = DB::table('KindRooms')->select('name')->get();
        
        // xuat ten loai phong ra de them moi phong
        // join lay ten cac loai phong ra
        return view('Rooms.create' , compact('KindRoom_id'));


    }

    // ham add them moi phong
}
