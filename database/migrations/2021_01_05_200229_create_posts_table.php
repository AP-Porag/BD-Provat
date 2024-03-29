<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
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
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('sub_category_id')->nullable();
            $table->foreignId('sub_menu_id')->nullable();
            $table->foreignId('post_author');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('thumbnail')->nullable();
            $table->string('status');
            $table->string('breaking')->default('not-breaking');
            $table->string('featured')->default('not-featured');
            $table->integer('views')->default(0);
            $table->integer('shares')->default(0);
            $table->string('alter_tag')->nullable();
            $table->string('publishing_date')->default(Carbon::now());
            $table->timestamps();
            $table->softDeletes();
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
