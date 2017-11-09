<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransporters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transporters', function($table)
		{
			$table->increments('id') -> unsigned();
			$table->string('firstname', 128);
			$table->string('lastname', 128);
			$table->string('mobilenumber', 12) -> unique();
			$table->string('IDnumber', 12) -> unique();
			$table->string('carrier', 123);
			$table->string('motobikeregnumber', 12);
			$table->string('vehiclemodel', 123);
			$table->string('vehicleregnumber', 12);
			$table->string('vehiclecapacity', 123);
			$table->timestamp('created_on');

		});
	
		
		//
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
