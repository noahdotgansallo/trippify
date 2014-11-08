<?php

class Trip extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trips';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function user()
	{
		return $this->belongsToMany('Trip');
	}
}
