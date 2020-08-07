<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventContenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_conten', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('title');
            $table->string('note');
            $table->string('address');
            $table->string('time');
            $table->string('date');
            $table->text('event_mission');
            $table->text('event_location');
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
        Schema::dropIfExists('event_conten');
    }
}
