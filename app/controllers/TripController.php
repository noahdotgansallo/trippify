<?php
require_once('yelp/yelp.php');

class TripController extends BaseController {

	public function createTrip()
	{
		$input = Input::all();
		$trip = new Trip;
		$trip->title = $input['title'];
		$trip->description = $input['description'];
		$trip->startDate = $input['startDate'];
		$trip->endDate = $input['endDate'];
		$trip->save();

		// attach the current user and trip

		$user = Sentry::getUser();

		$user->trips()->attach($trip);

		// Set the user to be the owner in the pivot table

		$user->trips()->updateExistingPivot($trip->id, array('access'=> True));
	}
}