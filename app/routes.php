<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//    $myname = 'Naqib Hossain';
//    return View::make('hello')->with('name', $myname);
//});

Route::get('/','PageController@home');
Route::get('/about','PageController@about');