<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAperosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aperos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('title', 100);
            $table->text('content');
            $table->text('abstract', 100);
            $table->string('uri',100);
            $table->enum('status', ['published', 'unpublished'])
                ->default('unpublished');
            $table->dateTime('published_on');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('SET NULL');
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('SET NULL');
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
        Schema::drop('aperos');
    }
}
