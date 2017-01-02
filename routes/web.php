<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/makeupclass', 'PagesController@categories');

Route::get('/article/{article}','ArticleController@show');

Route::get('/signup','PagesController@signup');

Route::get('/home', 'HomeController@index');

Route::get('/profile/{profile_id}', 'ProfileController@profile');
Route::get('/profileclass/{profileclass_id}', 'ProfileController@profileclass');
Route::get('/profileworkshop/{profileworkshop_id}', 'ProfileController@profileworkshop');

Route::get('/book/{user_id}','PagesController@book');

Route::post('/categories','Pagescontroller@search');

Route::group(['middleware' =>'guest'],function(){
	Route::post('/signup/doregister','usercontroller@insert');
});

//Route POST
Route::group(['middleware' =>'auth'],function(){
	Route::post('/article/{article}/edit','ArticleController@edit');
	Route::get('/logout','logincontroller@dologout');
});

Route::post('/dologin','logincontroller@dologin');

