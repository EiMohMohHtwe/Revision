<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdata = User::all()->toArray();
        
        return view('admins.userlist',compact('userdata'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.profile', compact('user'));
    }

    public function showAvatar($id)
    {
        $user = User::find($id);

        $filepath = storage_path('app/'. $user->avatar);

        return response()->file($filepath);
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = request('name');
        $user->sex = request('sex');
        $user->birthday = request('birthday');
        $user->age = request('age');
        $user->address = request('address');
        $user->telephone = request('telephone');

        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalName();
            $filepath = $file->storeAs('images', $filename);
            Image::make($file)->resize(300,300)->save($filepath);
            $user->avatar = $filepath;

        }
        $user->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
