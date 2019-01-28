<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('idArticles');
			$table->string('name', 255);
			$table->string('description', 255);
			$table->integer('quantity');
			$table->integer('price');
			$table->integer('sold');
			$table->string('imageLink', 255);
			$table->string('categorie', 20);
		});
	}

	public function down()
	{
		Schema::drop('articles');
	}
}