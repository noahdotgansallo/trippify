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
		if($this->shared = 0)
		{
			return $this->belongsTo('User');
		}
		if($this->shared = 1)
		{
			return $this->belongsToMany('User');
		}
	}
}
