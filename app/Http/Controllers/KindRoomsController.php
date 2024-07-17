<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KindRoomsController extends Controller
{
    // xuat list
    public function getListKindRooms()
    {
        // code xuat danh sach loai phong 
        $KindRooms = DB::table('KindRooms')->select('id', 'name', 'description')->get();
        return view('KindRooms.list', compact('KindRooms'));
    }

    // chuyen den trang them moi loai phong
    public function CreateKindRooms()
    {
        return view('KindRooms.create');
    }

    // ham insert loai phong du lieu vao csdl 
    public function storeKindRooms(Request $request)
    {

        // dd($request->all());
        // lay cac bien gia tri o form them moi
        $name = $request->name;
        $description =  $request->description;

        // truy van luu vao csdl 
        DB::table('KindRooms')->insert([
            'name' => $name,
            'description' => $description
        ]);

        return redirect('listKindRooms');
    }

    // ham delete 
    public function deleteKindRooms($id)
    {
        // xoa loai phong theo id
        DB::table('KindRooms')->delete($id);
        return redirect('listKindRooms');
    }

    // ham chuyen huong den form update va do du lieu theo id
    public function editKindRooms($id)
    {

        // viet do du lieu theo id 
        $KindRoom = DB::table('KindRooms')->where('id', $id)->first();
        return view('KindRooms.update', compact('KindRoom'));
    }

    // ham cap nhat khi sua du lieu moi loai phong 
    public function updateKindRooms(Request $request)
    {
        // viet code updata du lieu moi
        $name = $request->name;
        $description =  $request->description;

        // truy van luu vao csdl 
        DB::table('KindRooms')->where('id' , $request['id'])->update([
            'name' => $name,
            'description' => $description
        ]);
        return redirect('listKindRooms');
    }
}
