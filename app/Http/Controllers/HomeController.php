<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Menu;
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

    public function halls(){
        $data['halls'] = Hall::all();
        return view('halls', $data);
    }

    public function menu(){
        $data['menu'] = Menu::all();
        return view('menu', $data);
    }

    public function services(){
        $data['services'] = Service::all();
        return view('services', $data);
    }

    public function contact(){
        return view('contact');
    }

}
