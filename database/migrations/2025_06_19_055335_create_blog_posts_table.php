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
        $table->string('title');
        $table->string('featured_image'); // store filename/path
        $table->string('category');
        $table->longText('content');
        $table->date('publish_date');
        $table->boolean('is_popular')->default(false);
        $table->boolean('is_featured')->default(false);
        $table->bigInteger('views')->default(false);
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
