<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('others', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('gr_no');
			$table->string('tech_skills')->nullable();
			$table->string('other_skills')->nullable();
			


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
		Schema::drop('others');
	}

}
