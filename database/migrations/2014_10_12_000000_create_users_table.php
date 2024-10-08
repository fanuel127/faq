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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('email');
            $table->string('password',255);
            $table->integer('phoneNumber');
            $table->boolean('status')->default('1');
            $table->unsignedBigInteger('role_id')->default(1);
            $table->foreign('role_id')->constrained()->references('id')->on('role')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
