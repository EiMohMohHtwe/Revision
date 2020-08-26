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
        
        return view('admins.userlist',compact('userdata'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        return redirect()->back();
    }
}
