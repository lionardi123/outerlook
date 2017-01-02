<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Request;
use Validator;
use App\User;
use Date;

class usercontroller extends Controller
{
    public function insert(){

    	$email = Request::input('email');
    	$password = Request::input('password');
    	$confPassword = Request::input('confPassword');
    	$name = Request::input('firstname').Request::input('lastname');;
    	$dateofbirth = date("Y-m-d", strtotime(Request::input('dateofbirth')));
    	$gender = Request::input('gender');
    	$city = Request::input('city');
        $phone =Request::input('phone');
    	$address = Request::input('address');
    	$typename = Request::input('typename');
        $avatar = Request::file('avatar');

    	$valid = Validator::make(Request::all(),[
    		'email' => 'required',
    		'password' => 'required',
    		'confPassword' => 'required',
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'dateofbirth' => 'required',
    		'gender' => 'required',
            'phone' => 'required|numeric',
    		'city' => 'required',
    		'address'=> 'required',
            'typename'=> 'required',
    	]);

    	if($valid->fails()){
    		return redirect('/signup')->withErrors('You must not leave empty field');
    	}
    	else{
    		if($password!=$confPassword){
    			return redirect('/signup')->withErrors('Password and confirm password doesn\'t match');
    		}
    		if(strlen($password)<6){
    			return redirect('/signup')->withErrors('Password must be at least 6 characters');
    		}
    		$newuser = new User();
    		$newuser->user_email = $email;
    		$newuser->user_password = bcrypt($password);
    		$newuser->user_fullname = $name;
    		$newuser->user_gender = $gender;
    		$newuser->user_DOB = $dateofbirth;
    		$newuser->user_city = $city;
            $newuser->user_phone= $phone;
    		$newuser->user_address = $address;
    		if($typename=="normal"){
    			$newuser->user_usertypeid = 1;
    		}
    		else if($typename=="makeupartist"){
    			$newuser->user_usertypeid = 2;
    		}
    		$newuser->save();
            $avatarName = 'user_avatar'.$newuser->id.'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path("image/avatars/{$newuser->id}"), $avatarName);
            $newuser->user_avatar =  $avatarName;
            $newuser->save();
    		return redirect('/signup')->with('message','Sign up success!');
    	}
    }
}
