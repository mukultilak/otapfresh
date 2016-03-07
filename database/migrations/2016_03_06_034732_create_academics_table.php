<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('gr_no');
			$table->string('tenth')->nullable();
			$table->string('twelfth')->nullable();
			$table->string('dip_subject')->nullable();
			$table->string('dip_college')->nullable();
			$table->string('dip_agg')->nullable();

			$table->string('sem1')->nullable();
			$table->string('sem2')->nullable();
			$table->string('sem3')->nullable();
			$table->string('sem4')->nullable();
			$table->string('sem5')->nullable();
			$table->string('sem6')->nullable();
			$table->string('sem7')->nullable();
			$table->string('sem8')->nullable();

			$table->string('dead_back')->nullable();
			$table->string('live_back')->nullable();

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
		Schema::drop('academics');
	}

}
