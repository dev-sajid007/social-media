<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function get_results(Request $request){
        $query = $request->input('query');
        $users = User::where('username','LIKE','%'.$query.'%')->get();

        return view('search.result',compact('users'));
    }
}
