<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('gr_no');
			$table->string('mothers_maiden_name');
			$table->date('dob');
			$table->string('gender');
			$table->string('nationality');
			$table->string('phone');
			$table->string('other_phone')->nullable();
			$table->string('paddress');
			$table->string('caddress');
			$table->string('cpin');
			$table->string('cstate');

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
		Schema::drop('personals');
	}

}
