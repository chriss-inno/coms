<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('firstname',"50");
			$table->string('Lastname','50');
			$table->integer('phone');
			$table->datetime('regdate');
			$table->string('status');
			$table->integer('profileid');
			$table->integer('block');
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
		//
		Schema::drop('users');
	}

}
