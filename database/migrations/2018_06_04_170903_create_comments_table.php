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
            $table->increments('id');
            $table->integer('owner_post')->unsigned();
            $table->integer('owner_comment_id')->unsigned();
            $table->string('body');
            $table->integer('likes')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('owner_post')->references('id')->on('posts');
            $table->foreign('owner_comment_id')->references('id')->on('users');
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
