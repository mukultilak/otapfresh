<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certs', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('gr_no');
			$table->string('title')->nullable();
			$table->string('authority')->nullable();
			$table->string('description')->nullable();

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
		Schema::drop('certs');
	}

}
