<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIvantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ivants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('donation_id')->unsigned();
            $table->bigInteger('creator_user_id')->unsigned();
            $table->boolean('available');
            $table->foreign('donation_id')->references('id')->on('donations');
            $table->foreign('creator_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('ivants');
    }
}
