<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage_account', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('massage_id')->unsigned();
            $table->integer('account_id')->unsigned();

            $table->timestamps();
            $table->foreign('massage_id')->references('id')->on('massage');
            $table->foreign('account_id')->references('id')->on('account');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('massage_account');
    }
}
