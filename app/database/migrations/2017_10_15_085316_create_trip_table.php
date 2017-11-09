<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip', function($table)
			{
				$table->engine='InnoDB';
				$table-> increments('id')-> unsigned();
				$table->integer('route_id') -> unsigned() -> index();
				$table->integer('grader_id')->unsigned()->index();
				$table-> foreign('route_id') ->references('id')->on('routes')-> onDelete('cascade');
            	$table->boolean('active')->default(true);
				$table->foreign('grader_id')->references('id')->on('graders')->onDelete('cascade');
				$table->timestamp('created_on');
			});
			
			
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip');
		//
	}

}
