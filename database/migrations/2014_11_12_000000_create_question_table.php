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
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('questionName');
            $table->string('category_id');
            $table->string('description');
            $table->string('answer');
            $table->text('photo');
            $table->text('photo2');
            $table->text('video')->nullable;
            // $table->unsignedBigInteger('user_id')->default('1');
            // $table->foreign('user_id')->constrained()->references('id')->on('users')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
