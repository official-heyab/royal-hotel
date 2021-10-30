<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller{

    public function __construct(){

    }

    public function index(){

    }

    public function store(Request $request){
        $menu = new Menu;
        $menu->name = $request->input('name');
        $menu->isFood = $request->input('isFood');
        $menu->price = $request->input('price');
        $menu->description = $request->input('description');
        $menu->save();
        return redirect()->back()->with('success','Menu Created');

    }

    public function update(Request $request){
        $menu = Menu::find($request->input('id'));
        $menu->name = $request->input('name');
        $menu->isFood = $request->input('isFood');
        $menu->price = $request->input('price');
        $menu->description = $request->input('description');
        $menu->save();
        return redirect()->back()->with('success','Menu Updated');
    }


    public function delete(Request $request){
        $menu = Menu::find($request->input('id'));
        $menu->delete();
        return redirect()->back()->with('success','Menu Deleted');
    }



}
