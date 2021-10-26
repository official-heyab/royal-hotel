<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Service;

class AdminController extends Controller{

    public function __construct(){

    }

    public function index(){
        return view('admin.home');
    }

    public function dashboard(){
        return view('admin.home');
    }

    public function services(){
        $data['services'] = Service::with('reservations.reservation')->get();
        return view('admin.services', $data);
    }

    public function rooms(){
        $data['rooms'] = Room::with('reservations.reservation')->get();
        return view('admin.rooms', $data);
    }


}
