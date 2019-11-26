<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('requester')->unsigned();
            $table->bigInteger('user_requested')->unsigned();
            $table->bigInteger('state')->unsigned()->default(1);
            $table->timestamps();

            $table->foreign('requester')->on('users')->references('id')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_requested')->on('users')->references('id')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('state')->on('friendship_states')->references('id')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friendships');
    }
}
