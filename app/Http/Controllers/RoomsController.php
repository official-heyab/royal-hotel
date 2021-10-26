<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller{

    public function __construct(){

    }

    public function index(){

    }

    public function store(Request $request){
        $room = new Room;
        $room->name = $request->input('name');
        $room->cover_image = "https://via.placeholder.com/150";
        $room->price_per_night = $request->input('price');
        $room->description = $request->input('description');
        $room->save();
        return redirect()->back()->with('success','Room Created');

    }

    public function update(Request $request){
        $room = Room::find($request->input('id'));
        $room->name = $request->input('name');
        $room->price_per_night = $request->input('price');
        $room->description = $request->input('description');
        $room->save();
        return redirect()->back()->with('success','Room Updated');
    }


    public function delete(Request $request){
        $room = Room::find($request->input('id'));
        $room->delete();
        return redirect()->back()->with('success','Room Deleted');
    }



}
