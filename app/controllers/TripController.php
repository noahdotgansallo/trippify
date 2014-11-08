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

	}
}