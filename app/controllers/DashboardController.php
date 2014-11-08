<?php
require_once('yelp/yelp.php');

class DashboardController extends BaseController {

	public function index()
	{
		$user = Sentry::getUser();
		return $user;
	}
}