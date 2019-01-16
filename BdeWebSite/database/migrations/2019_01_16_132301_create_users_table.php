<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('idUsers');
			$table->string('Name', 255);
			$table->string('lastName', 255);
			$table->string('location', 255);
			$table->string('email', 255);
			$table->string('password', 60);
			$table->string('remember_token', 100);
			$table->tinyInteger('state')->default('0');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}