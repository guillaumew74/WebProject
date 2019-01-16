<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('idComments');
			$table->string('comments', 255);
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}