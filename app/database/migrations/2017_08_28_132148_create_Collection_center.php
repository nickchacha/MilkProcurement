a2<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionCenter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collectioncenter', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('centername',128);
			$table->integer('route_id')->unsigned()->index();
			$table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade'); 

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
		Schema::drop('CollectionCenter');
		//
	}

}
