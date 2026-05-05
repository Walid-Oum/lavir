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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //table voor de basiswaardes
            $table->string('title');
            $table->string('image_path')-> nullable();
            $table->text('content');
            // in het geval dat het nog een draft is, heeft het nog geen datum


            //Relations
            //belongs to author
            $table->foreignId('author_id')->nullable();
            //belongs to category
            $table->foreignId('category_id')->nullable();
            $table->timestamp('published_at')-> nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
