<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use App\Makeupclass;
use Request;
use Validator;


class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function profile($profile_id){
        $owned=1;
        $profile = DB::table('msusers')->where('id', $profile_id)->first();
        if(Auth::user()){
            if(Auth::user()->id == $profile->id){
                $owned=0;
            }
        }
        return view('profile', ['profile' => $profile, 'owned' => $owned]);
    }

    public function profileclass($profileclass_id){
        $owned=1;
        $user=null;
        $Makeupclass = Makeupclass::whereid($profileclass_id)->first();
        if(Auth::user()){
            if(Auth::user()->id == $Makeupclass->class_ownerid){
                $owned=0;
            }
        }
       return view('profileclass', ['owned' => $owned]);
    }

    public function profileworkshop($profileworkshop_id){
        $owned=1;
        return view('profileworkshop');
    }
}
