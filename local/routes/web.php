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
   return view('users.file');
});

Route::get('class',function(){
    return view('users.class');
});
Route::get('exercise',function(){
    return view('users.exercise');
});

Route::get('compare', function(){
	return view('users.compare');
});

Route::get('register','HomeController@getRegister');
Route::post('register','HomeController@postRegister');
Route::get('login','HomeController@getLogin');
Route::post('login','HomeController@postLogin');


Route::post('upload', 'UploadController@uploadFromComputer');
Route::post('googleDrive', 'googleDriverController@uploadFromDrive');


Route::group(['prefix'=>'ajax'], function(){
	Route::get('class/{idsubject}', 'CompareController@getClass');
	Route::get('exercise/{idClass}', 'CompareController@getExercise');
});
Route::group(['prefix'=> 'users'],function(){
    Route::group(['prefix' => 'subject'],function (){
        Route::get('list','SCManagementController@listAllSubject');
        Route::post('add','SCManagementController@addSubject');
        Route::get('delete','SCManagementController@deleteSubject');
        Route::get('search','SCManagementController@searchSubject');
        Route::post('edit/{id}','SCManagementController@renameSubject');
    });
});

