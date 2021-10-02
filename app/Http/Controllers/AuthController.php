<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get_signup(){
        return view('auth.signup');
    }
    public function post_signup(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'email' =>$request->email,
            'username' =>$request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('info','Ýour account has been created');
    }
    public function get_signin(){
        return view('auth.signin');
    }
    public function post_signin(Request $request){
        $this->validate($request,[
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);
        if (!Auth::attempt($request->only(['email','password']),$request->has('remember'))){
            return redirect()->back()->with('info','Email or password not matched:)');
        }
        return redirect()->route('home')->with('info','You are signed in :)');

    }

    public function get_signout(){
        Auth::logout();
        return redirect()->route('home');
    }

}
