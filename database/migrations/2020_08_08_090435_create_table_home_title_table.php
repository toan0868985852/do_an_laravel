<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHomeTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeTitle', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->string('img');
            $table->text('h1p1');
            $table->text('h1p2');
            $table->text('h1p3');
            $table->text('p1');
            $table->text('p2');
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
        Schema::dropIfExists('homeTitle');
    }
}
