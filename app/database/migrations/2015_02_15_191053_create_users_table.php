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
			$table->string('name', 50);
			$table->string('lastname_1', 50);
			$table->string('lastname_2', 50)->nullable();
			$table->string('nick', 50)->unique();
			$table->string('email', 100)->unique();
			$table->string('password', 100);
			$table->string('rfc', 50)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('celphone', 20)->nullable();
			$table->string('street', 50)->nullable();
			$table->string('number', 7)->nullable();
			$table->string('suburb', 50)->nullable();
			$table->string('ps', 7)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->integer('rank')->default(1);
			$table->boolean('status')->default(1);
			$table->timestamps();
			$table->string('remember_token', 100)->nullable();
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
