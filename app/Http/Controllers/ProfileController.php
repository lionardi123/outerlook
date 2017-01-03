<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use App\Makeupclass;
use App\Makeupworkshop;
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
        $classowned =  Makeupclass::where('class_ownerid', $profile_id)->get();
        $workshopowned = Makeupworkshop::where('workshop_ownerid', $profile_id)->get();
        if(Auth::user()){
            if(Auth::user()->id == $profile->id){
                $owned=0;
            }
        }
        return view('profile', ['profile' => $profile, 'owned' => $owned, 'classowned' => $classowned, 'workshopowned' => $workshopowned                   ]);
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
       return view('profileclass', ['owned' => $owned, 'Makeupclass' => $Makeupclass]);
    }

    public function profileworkshop($profileworkshop_id){
        $owned=1;
        $user=null;
        $Makeupworkshop = Makeupworkshop::whereid($profileworkshop_id)->first();
        if(Auth::user()){
            if(Auth::user()->id == $Makeupworkshop->workshop_ownerid){
                $owned=0;
            }
        }
        return view('profileworkshop', ['owned' => $owned, 'Makeupworkshop' => $Makeupworkshop]);
    }
}
