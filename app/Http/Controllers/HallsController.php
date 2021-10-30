<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;

class HallsController extends Controller{

    public function __construct(){

    }

    public function index(){

    }

    public function store(Request $request){
        $hall = new Hall;
        $hall->name = $request->input('name');
        $hall->cover_image = "https://via.placeholder.com/150";
        $hall->status = $request->input('status');
        $hall->size = $request->input('size');
        $hall->price = $request->input('price');
        $hall->description = $request->input('description');
        $hall->save();
        return redirect()->back()->with('success','Hall Created');

    }

    public function update(Request $request){
        $hall = Hall::find($request->input('id'));
        $hall->name = $request->input('name');
        $hall->price = $request->input('price');
        $hall->status = $request->input('status');
        $hall->size = $request->input('size');
        $hall->description = $request->input('description');
        $hall->save();
        return redirect()->back()->with('success','Hall Updated');
    }


    public function delete(Request $request){
        $hall = Hall::find($request->input('id'));
        $hall->delete();
        return redirect()->back()->with('success','Hall Deleted');
    }



}
