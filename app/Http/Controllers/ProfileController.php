<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function profile($profile_id){
        $owned=1;
        $profile = DB::table('msusers')->where('id', $profile_id)->first();
        if(Auth::user()){
            $owned=0;
        }
        return view('profile', ['profile' => $profile, 'owned' => $owned]);
    }
}
