<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobdescsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobdescs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('comp_name');
			$table->string('percent');
			$table->string('atkt');
			$table->string('location');
			$table->string('package');
			$table->string('link');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobdescs');
	}

}
