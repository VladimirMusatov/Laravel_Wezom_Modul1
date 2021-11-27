<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table -> id();
            $table ->string('title');
            $table ->text('description');
            $table ->text('text');
            $table->string('image');
            //Количесво просмотров новости
            $table->integer('view_count')->default(0);
            //Статус(Опубликована или нет)
            $table->boolean('status')->default(false);
            $table ->timestamps();
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
