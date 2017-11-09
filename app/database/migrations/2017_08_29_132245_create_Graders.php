<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('graders', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')-> unsigned();
			$table->string('FirstName',128);
			$table->string('Lastname', 128);
			$table->string('phonenumber', 12) -> unique();
			$table->integer('route_id')->unsigned()->index();
			$table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
			$table->integer('collectioncenter_id') -> unsigned() ->index();
			$table->foreign('collectioncenter_id')->references('id')->on('collectioncenter')->onDelete('cascade');
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
		Schema::drop('Graders');
		//
	}

}
