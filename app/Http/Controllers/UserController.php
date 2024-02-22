<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function showRegister(){
        return view(view: 'register');
    }

    public function register(Request $request){
        $user = User::query()->create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password'])
        ]);

        Auth::login($user);

        return redirect()->route(route: 'profile');
    }

    public function profile(){
        return view('profile');
    }
}
