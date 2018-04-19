<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',function(){
    return view('login');
});
Route::get('file',function(){
   return view('file');
});
Route::get('subject',function(){
    return view('subject');
});
Route::get('class',function(){
    return view('class');
});
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::post('upload', 'UploadController@uploadFromComputer');
Route::post('googleDrive', 'googleDriverController@uploadFromDrive');

