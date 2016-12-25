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

Route::get('/profile', 'PagesController@cart');

Route::get('/article/{article}','ArticleController@show');

Route::get('/profile','PagesController@profile');

Route::get('/signup','PagesController@signup');

Route::get('/home', 'HomeController@index');

Route::get('/book/{user_id}','PagesController@book');

Route::group(['middleware' =>'guest'],function(){
	Route::post('/signup/doregister','usercontroller@insert');
});

//Route POST
Route::group(['middleware' =>'auth'],function(){
	Route::post('/article/{article}/edit','ArticleController@edit');
	Route::get('/logout','logincontroller@dologout');
});

Route::post('/dologin','logincontroller@dologin');

