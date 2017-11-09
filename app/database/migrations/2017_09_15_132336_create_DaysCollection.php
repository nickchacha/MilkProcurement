<?php
//WIP learn unasigned and index functions:
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysCollection extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DaysCollection', function($table)
		{
			$table->engine='InnoDB';
			$table->increments('id') -> unsigned();
			//$table->string('RouteName',128);
			$table->integer('farmers_id') -> index() -> unsigned();
			$table->integer('route_id')->index()->unsigned();
			$table->integer('grader_id')->index()->unsigned();
			$table->integer('transporter_id')->index()->unsigned();
			$table->integer('CollectionCenter_id')->index()->unsigned();
			$table->integer('trip_id')->index()->unsigned();
			$table->date('Collection_Date');
			$table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
			$table->foreign('grader_id')->references('id')->on('graders')->onDelete('cascade');
			$table->foreign('transporter_id')->references('id')->on('transporters')->onDelete('cascade');
			$table->foreign('collectioncenter_id')->references('id')->on('collectioncenter')->onDelete('cascade');
			//
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
		Schema::drop('Routes');
		//
	}

}
