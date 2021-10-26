<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller{

    public function __construct(){

    }

    public function index(){

    }

    public function store(Request $request){
        $service = new Service;
        $service->name = $request->input('name');
        $service->cover_image = "https://via.placeholder.com/150";
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->save();
        return redirect()->back()->with('success','Service Created');

    }

    public function update(Request $request){
        $service = Service::find($request->input('id'));
        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->save();
        return redirect()->back()->with('success','Service Updated');
    }


    public function delete(Request $request){
        $service = Service::find($request->input('id'));
        $service->delete();
        return redirect()->back()->with('success','Service Deleted');
    }



}
