<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgListimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listimg', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->integer('img_id')->unsigned();
            $table->timestamps();
            $table->foreign('img_id')->references('id')->on('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listimg');
    }
}
