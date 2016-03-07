<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');						//Landing Page
Route::get('home', 'HomeController@index');						//For Loading Dashboards


//temp
Route::get('inbox','InboxController@index');			




//Routing for Signups
Route::get('signup', 'SignupController@index');					//Student signup
Route::post('register', 'SignupController@register');			//Signup reguests

Route::post('sr', 'SignupController@sr');						//Staffsignup feed POST

Route::get('fetch-dept',array('uses'=>'SignupController@fetch_dept'));					//AJAX for fetching department




Route::get('dd', 'SignupController@defScope');					//Student signup




Route::get('staff-signup','SignupController@staff_signup'); 	//Staff signup


Route::get('/admin/allow/{a}',['uses'=>'AdminController@allow']);
Route::get('/admin/deny/{a}',['uses'=>'AdminController@deny']);
Route::get('permissions','PermissionController@index');


//New Event
Route::get('create-event','NewEventController@cevent');

Route::get('new-drive','NewEventController@newDrive');
Route::post('drive-register','NewEventController@register_drive'); 	

Route::get('new-event','NewEventController@newEvent');
Route::post('event-register','NewEventController@RegisterNewEvent'); 	

Route::get('notice','NoticeController@index');
Route::post('notice_register','NoticeController@register_notice');


//Authenticataions
Route::post('auth', 'loginController@authenticate');
Route::get('logout', 'loginController@logout');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//STUDENT

Route::get('personal','ProfileController@personal');
Route::post('personal_register', 'ProfileController@personal_register');

Route::get('academic','ProfileController@academic');
Route::post('academic_register', 'ProfileController@academic_register');

Route::get('other','ProfileController@other');
Route::post('other_register', 'ProfileController@other_register');

Route::get('career','ProfileController@career');
Route::post('career_register', 'ProfileController@career_register');


Route::get('db',function(){//TEMp
	return view('dbview.dbview');
});

Route::get('test',function(){//TEMp
	return view('tpo.blank');
});



//API's
Route::get('api/auth/{u}/{p}',array('uses'=>'SignupController@api_auth'));					//API for authentications

Route::get('api/event/scope/{s}','ApiController@ev_scope');					//API for authentications

Route::get('api/notice/scope/{s}','ApiController@not_scope');
