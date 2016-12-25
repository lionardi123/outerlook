<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Request;
use Validator;
use App\User;

class logincontroller extends Controller
{
    public function dologin(){
    	$email = Request::input('email');
    	$password = Request::input('password');

    	$valid = Validator::make(Request::all(),[
    		'email' => 'required',
    		'password' => 'required',
    	]);

    	if($valid->fails()){
    		return redirect('/')->withErrors('Email or Password cannot be empty');
    	}
    	else{
    		$auth = Auth::attempt(['user_email' => Request::input('email'), 'password' => Request::input('password')]);

    		if(!$auth){
    			return redirect('/')->withErrors('Email or/and Password is wrong');
    		}
    		else{
    			return redirect('/')->withErrors('Login successful!');
    		}
    	}
    }
    public function dologout(){
        Auth::logout();
        return redirect('/');
    }
}
