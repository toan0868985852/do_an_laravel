<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCauseSetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causeDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title1');
            $table->text('title2');
            $table->longText('p1');
            $table->longText('p2');
            $table->longText('p3');
            $table->longText('p4');
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
        Schema::dropIfExists('causeDetails');
    }
}
