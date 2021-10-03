<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function get_profile($username){

        $user = User::where('username',$username)->first();
        return view('profile.index')->with('user',$user);
    }
}
