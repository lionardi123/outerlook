<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Request;
use Validator;

class ArticleController extends Controller
{
    public function show(Article $article){
    	
    	return view('article',compact('article'));
    }

    public function edit(Article $article){

    	$title = Request::input('article_title');
    	$article_body  = Request::input('article_body');
    	$image_detail = Request::file('imagedetail');
    	$image_card = Request::file('imagecard');

    	$valid = Validator::make(Request::all(),[
			'article_title' => 'required',
			'article_body' => 'required|max:4000',
			'imagedetail' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1280',
			'imagecard' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=400,min_height:400',
         
        ]);

    	if($valid->fails()){
    		return redirect()->back()->withErrors('Do not leave empty fields');
    	}
    	else{

    		$article->article_title = $title;
    		$article->article_body = $article_body;
    		$imageDetailName = 'article_imagedetail'.$article->id.'.'.$image_detail->getClientOriginalExtension();
        	$image_detail->move(public_path("image/{$article->id}"), $imageDetailName);
        	$imageCardName = 'article_imagecard'.$article->id.'.'.$image_card->getClientOriginalExtension();
        	$image_card->move(public_path("image/{$article->id}"),$imageCardName);
        	$article->article_imagedetail =  $imageDetailName;
        	$article->article_imagecard = $imageCardName;
    		$article->save();
    		return redirect()->back();
    	}
    }
}
