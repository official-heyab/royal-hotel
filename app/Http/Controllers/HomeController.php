<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Service;



class HomeController extends Controller{

    public function __construct(){

    }

    public function index(){
        $data['rooms'] = Room::all();
        $data['services'] = Service::all();
        return view('home',$data);
    }


    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        $data['services'] = Service::all();
        return view('services', $data);
    }

    public function contact(){
        return view('contact');
    }

}
