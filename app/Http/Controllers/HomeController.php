<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller{

    public function __construct(){

    }

    public function index(){
        $data['companies'] = '';
        return view('home',$data);
    }


    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }

}
