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

    	$valid = Validator::make(Request::all(),[
			'article_title' => 'required',
			'article_body' => 'required|max:4000',
    		]);

    	if($valid->fails()){
    		return redirect()->back()->withErrors('Title and body must be filled');
    	}
    	else{
    		$article->article_title = $title;
    		$article->article_body = $article_body;
    		$article->save();
    		return redirect()->back();
    	}
    }
}
