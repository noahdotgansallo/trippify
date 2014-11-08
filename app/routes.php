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


//For Register. Send parameters: email, password, firstName, lastName
//http://localhost/trippify/public/register?email=nootboy2008@gmail.com&password=1234&firstName=Noah&lastName=Gansallo
Route::any('/register', 'HomeController@registerUser');

//For Login. Send parameters: email, password
//http://localhost/trippify/public/login?email=nootboy2008@gmail.com&password=1234
Route::any('/login', 'HomeController@loginUser');

//Returns the user info. No parameters
//http://localhost/trippify/public/overview
Route::any('/overview', 'DashboardController@index');

/*
	For creation of trips
	Send parameters
	title : The trip's title
	description : the trip's description in 500 characters
	startDate
	endDate
*/

Route::any('/create/trip', 'TripController@createTrip');

