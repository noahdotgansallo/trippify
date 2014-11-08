<?php
require_once('yelp/yelp.php');

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function registerUser()
	{
		$input = Input::all();
	    try {
	    	$user = Sentry::register(array(
		        'email'    => $input['email'],
		        'password' => $input['password'],
		        'first_name' => $input['firstName'],
		        'last_name' => $input['lastName'],
		        'activated' => 1
		    ));

	    	return 1;
	    } catch (Exception $e) {
	    	return 0;
	    }
	    
	}

	public function loginUser()
	{
		$input = Input::all();

		$credentials = array(
			'email' => $input['email'],
			'password' => $input['password']
		);
		$user = Sentry::authenticate($credentials, false);
		dd($user);
	}

	public function yelpSearch()
	{
		$consumerkey = 'linWaALegrPgj5fzFsf3Fg';
		$consumersecret = 'uHA0g59VgEOBTCttQtGg1_pf-OE';
		$token = 'viGoOKc5AA28gl9lmrxzRAuscbXnjgeo';
		$tokensecret = 'y8EJ81YyJkHkHJKCkJwTAdrcbtQ';

		$yelp = new Yelp($consumerkey,$consumersecret,$token,$tokensecret);
		$yelp->parameters['term'] = 'pizza';
		$yelp->parameters['sort'] = 1;
		$yelp->parameters['location'] = '24th and Brown Street Philadelphia PA';
		try {
		    $r = $yelp->query();
		   return $r;
		} catch (Exception $e) {
		    print_r($e);
		}
	}

}
