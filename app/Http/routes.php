<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

    Route::get('/login', function() {
    	return view('login');
    })->name('login');

    Route::post('/volunteer', [ //'/signup' will be displayed in url when this post route is accessed.
		'uses' => 'Usercontroller@Volunteersignup', //tells the method and contronler to use.
		'as' => 'Volunteersignup',
	]);
	

	Route::get('/dashboard', [
		'uses' => 'Usercontroller@getDashboard',
		'as' =>'dashboard', //dashboard scan now be refered to in the view as dashbord.
		//'middleware' => 'auth',  // makes this so that your dash bord calles the auth middle ware,   Meaning it can only be accessed once user is authenticated.
	]);
	Route::get('/Orgdashboard', [
		'uses' => 'Usercontroller@getorgDashboard',
		'as' =>'Orgdashboard', //dashboard can now be refered to in the view as dashbord.
		//'middleware' => 'auth',  // makes this so that your dash bord calles the auth middle ware,   Meaning it can only be accessed once user is authenticated.
	]);
	Route::post('/Organizationsignup', [ //'/signup' will be displayed in url when this post route is accessed.
		'uses' => 'Usercontroller@Organizationsignup', //tells the method and contronler to use.
		'as' => 'Organizationsignup',
	]);
	Route::post('/Volunteersignin', [ //'/signup' will be displayed in url when this post route is accessed.
		'uses' => 'Usercontroller@Volunteersignin', //tells the method and contronler to use.
		'as' => 'Volunteersignin',
	]);

	Route::post('/Organizationsignin', [
		'uses' => 'Usercontroller@Organizationsignin',
		'as' => 'Organizationsignin'
	]);
	Route::get('/Orgform', [
		'uses' => 'Usercontroller@Orgform',
		'as' => 'Orgform'
	]);
	Route::get('/Volform', [
		'uses' => 'Usercontroller@Volform',
		'as' => 'Volform'
	]);
    Route::post('/type_of_user', [
 	'uses' => 'Usercontroller@Type_of_user',
 	'as' => 'type_of_user',
 ]);
});
