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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('tag_id')->constrained();
            $table->foreignId('image_id')->constrained('pictures');
            $table->foreignId('comment_id')->constrained();
            $table->foreignId('author_id')->constrained();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('slug');
            $table->string('excerpt');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
