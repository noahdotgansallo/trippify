<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TripTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trips', function($table){
			$table->timestamps();
			$table->string('title');
			$table->increments('id');
			$table->string('description', 500);
			$table->dateTime('startDate');
			$table->dateTime('endDate');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
