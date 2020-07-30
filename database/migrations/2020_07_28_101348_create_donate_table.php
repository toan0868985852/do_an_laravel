<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate', function (Blueprint $table) {
            $table->increments('id');
            $table->double('so_tien_donate');
            $table->string('hinh_thuc');
            $table->integer('account_id')->unsigned();
            $table->integer('projects_id')->unsigned();
            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('account');
            $table->foreign('projects_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donate');
    }
}