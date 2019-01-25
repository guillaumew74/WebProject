<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

	public function up()
	{
		Schema::create('photos', function(Blueprint $table) {
			$table->increments('idPhotos');
			$table->string('ImageLink', 255);
			$table->integer('nbrLike');
		});
	}

	public function down()
	{
		Schema::drop('photos');
	}
}
