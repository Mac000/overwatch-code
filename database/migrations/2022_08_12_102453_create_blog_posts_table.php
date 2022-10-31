<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->boolean('featured')->default(false);
            $table->string('name');
            $table->string('title');
            $table->text('short_description');
            $table->string('banner_image');
            $table->string('featured_image');
            $table->text('content');

            $table->string('ur_title')->nullable();
            $table->text('ur_short_description')->nullable();
            $table->text('ur_content')->nullable();

            $table->string('written_at');
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
        Schema::dropIfExists('blog_posts');
    }
}
