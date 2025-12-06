<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // title field
            $table->text('description')->nullable(); // optional description
            $table->enum('type', ['photo', 'video']); // media type
            $table->text('media_url'); // video URL or image URL
            $table->string('thumbnail')->nullable(); // uploaded thumbnail file path
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
