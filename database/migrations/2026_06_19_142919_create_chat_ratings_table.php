<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chat_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_id')->nullable();
            $table->foreignId('admin_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->integer('rating')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chat_ratings');
    }
};