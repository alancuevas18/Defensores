<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('foot');
            $table->string('slug')->unique();
            $table->mediumText('excerpt');
            $table->text('body');
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->string('file');

            $table->timestamps();

            //Relationship
            
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
