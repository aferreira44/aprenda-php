<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){

        // select * from users OR FILTERING $users = User::where(´age´, ´>=´, 21)->get();
        $users = User::all();
        
        return view('users.index', compact('users'));
    }

    public function store(){
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();

        return back();
    }
}
