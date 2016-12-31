<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function categories(){
    	return view('makeupClassc');
    }

    public function cart(){
    	return view('cart');
    }

    public function article(){
    	return view('article');
    }

    public function signup(){
    	return view('signup');
    }

    public function book($user_id){
        return view('book',['user_id' => $user_id]);
    }
}
