<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('gr_no',30);
			$table->string('fname');
			$table->string('mname')->nullable();
			$table->string('lname');
			$table->integer('type')->default(0);
			$table->integer('status')->default(0);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('scope', 10)->default('0');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
