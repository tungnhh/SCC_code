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

Route::get('dashboard', function(){
	return view('users.dashboard');
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


// User login ---------------------------------------------------------------

Route::get('register','UserAuth\RegisterController@getRegister');
Route::post('register','UserAuth\RegisterController@postRegister');

Route::get('login','UserAuth\LoginController@getLogin');
Route::post('login','UserAuth\LoginController@postLogin');

// User login ---------------------------------------------------------------
Route::get('logout','UserAuth\LogoutController@logout');
// User logout---------------------------------------------------------------







Route::post('upload', 'UploadController@uploadFromComputer');
Route::post('googleDrive', 'googleDriverController@uploadFromDrive');

Route::post('getCompare', 'CompareController@compare');


Route::group(['prefix'=>'users','middleware'=>'userlogin'],function(){
    Route::get('report', function(){
        return view('users.report');
    });
    Route::group(['prefix' => 'subject'],function (){
        Route::get('list','SCManagementController@listAllSubject');
        Route::post('add','SCManagementController@addSubject');
        Route::get('delete','SCManagementController@deleteSubject');
        Route::get('search','SCManagementController@searchSubject');
        Route::post('edit/{id}','SCManagementController@renameSubject');
});



Route::group(['prefix'=>'ajax', 'middleware'=>'userlogin'], function(){
	Route::get('class/{idsubject}', 'CompareController@getClass');
	Route::get('exercise/{idClass}', 'CompareController@getExercise');
	Route::get('student/{exerciseID}', 'CompareController@getStudent');
});


