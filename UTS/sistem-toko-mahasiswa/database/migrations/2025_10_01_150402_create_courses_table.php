<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('short_description');
            $table->string('instructor');
            $table->string('image')->nullable();
            $table->string('icon')->default('📚');
            $table->string('color')->default('blue');
            $table->integer('duration_weeks');
            $table->integer('total_lessons')->default(0);
            $table->integer('total_quizzes')->default(0);
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->string('level')->default('beginner');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->json('topics')->nullable();
            $table->text('learning_outcomes')->nullable();
            $table->text('requirements')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};