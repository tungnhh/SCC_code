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
   return view('users.files');
});
Route::get('subject',function(){
    return view('users.subjects');
});
Route::get('class',function(){
    return view('users.classes');
});
Route::get('exercise',function(){
    return view('users.exercises');
});
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::post('upload', 'UploadController@uploadFromComputer');
Route::post('googleDrive', 'googleDriverController@uploadFromDrive');

