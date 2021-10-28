<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UsersController extends Controller{

    public function __construct(){

    }


    public function store(Request $request){

        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'email|required',
        //     'password' => 'required|string|min:8'
        // ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('success','User Created');



    }

    public function update(Request $request){
        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'email|required'
        // ]);

        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role');
        $user->save();

        return redirect()->back()->with('success','User Updated');
    }


    public function delete(Request $request){
        $user = User::find($request->input('id'));
        $user->delete();
        return redirect()->back()->with('success','User Deleted');
    }



}
