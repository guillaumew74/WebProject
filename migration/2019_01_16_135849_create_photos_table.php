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
			$table->integer('idEvents');
			$table->integer('idUsers');
			$table->timestamps();

			  $table->foreign('idEvents')->references('idEvents')->on('Events')->onDelete('restrict')->onUpdate('restrict');
			  $table->foreign('idUsers')->references('id')->on('Users')->onDelete('restrict')->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::drop('photos');
	}
}
