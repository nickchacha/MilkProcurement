<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('routes', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id') ->unsigned();
			$table->string('routename',128);
			$table->integer('grader_id');
			$table->integer('transporter_id');
			//$table->foreign('grader_id')->references('id')->on('graders')->onDelete('cascade');
			//$table->foreign('transporter_id')->references('id')->on('transporters')->onDelete('cascade');

			//$table->string('Lastname', 128);
			//$table->varchar('phonenumber', 12);
			//$table->string('correctioncenter', 128);
			$table-> timestamp('when');

		});
		// Creating Farmers table
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('routes');
		//
	}

}
