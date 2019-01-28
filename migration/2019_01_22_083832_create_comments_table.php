<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('idComments');
            $table->text('comments');
            $table->integer('idEvents');
            $table->integer('idUsers');
            $table->timestamps();

            $table->foreign('idEvents')->references('idEvents')->on('Events')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('idUsers')->references('id')->on('Users')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
