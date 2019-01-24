<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribes', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('suscribes');
    }
}
