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
    	$state = Request::input('state');
    	$city = Request::input('city');
    	$zip  = Request::input('zip');
    	$address = Request::input('address');
    	$typename = Request::input('typename');

    	$valid = Validator::make(Request::all(),[
    		'email' => 'required',
    		'password' => 'required',
    		'confPassword' => 'required',
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'dateofbirth' => 'required',
    		'gender' => 'required',
    		'state' => 'required',
    		'city' => 'required',
    		'zip' => 'required',
    		'address'=> 'required',
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
    		$newuser->user_usertypeid = 1;
    		$newuser->user_gender = $gender;
    		$newuser->user_DOB = $dateofbirth;
    		$newuser->user_state = $state;
    		$newuser->user_city = $city;
    		$newuser->user_zip = $zip;
    		$newuser->user_address = $address;
    		if($typename=="normal"){
    			$newuser->user_usertypeid = 1;
    		}
    		else if($typename=="makeupartist"){
    			$newuser->user_usertypeid = 2;
    		}
    		$newuser->save();
    		return redirect('/signup')->with('message','Sign up success!');
    	}
    }
}
