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

Route::get('/article','PagesController@article');

Route::get('/profile','PagesController@profile');

Route::get('/register1','PagesController@register');
Auth::routes();

Route::get('/home', 'HomeController@index');
