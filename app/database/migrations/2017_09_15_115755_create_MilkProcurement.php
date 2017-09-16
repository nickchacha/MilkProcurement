<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilkProcurement extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('farmers', function($table)
		{
			$table->increments('id');
			$table->string('firstname',128);
			$table->string('Lastname', 128);
			$table->varchar('phonenumber', 12);
			$table->string('correctioncenter', 128);
			$table-> timestamp();

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
