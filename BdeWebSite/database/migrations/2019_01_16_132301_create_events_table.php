<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->string('owner', 255);
			$table->date('date');
			$table->string('description', 255);
			$table->boolean('validated');
			$table->string('imageLink', 255);
			$table->integer('vote');
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}