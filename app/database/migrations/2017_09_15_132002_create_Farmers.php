<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmers extends Migration 
{

	/**
	 * Run the migrations.
	 *


	 */
	function up()
	{
		Schema::create('farmers', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id') -> unsigned();
			$table->string('firstname',128);
			$table->string('lastname', 128);
			$table->string('phonenumber', 12)-> unique();
			$table->integer('route_id') -> unsigned()->index();
			$table->integer('grader_id') -> unsigned()->index();
			$table->integer('transporter_id') -> unsigned()->index();
			$table->integer('collectioncenter_id') -> unsigned() ->index();
			$table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
			$table->foreign('grader_id')->references('id')->on('graders')->onDelete('cascade');
			$table->foreign('transporter_id')->references('id')->on('transporters')->onDelete('cascade');
			$table->foreign('collectioncenter_id')->references('id')->on('collectioncenter')->onDelete('cascade');
			$table-> timestamp('created_on');

			

		});
		// Creating Farmers table
	}
	
	/**
	 * Reverse the migrations.
	 *
	 */
	public function down()
	{
		Schema::drop('farmers');
		//Schema::drop('password_reminder');
		//
	}

}