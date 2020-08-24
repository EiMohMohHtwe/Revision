<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function index()
    {
        $userdata = User::all()->toArray();
        return view('auth.userlist',compact('userdata'));
    }

    public function create()
    {
        return view('users.profile', array('user' => Auth::user()));  
    }
}
