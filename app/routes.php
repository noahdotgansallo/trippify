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



