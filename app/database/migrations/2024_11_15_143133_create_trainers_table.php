<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->uuid('trainer_id')->primary();
            $table->uuid('user_id')->unique();
            $table->uuid('teacher_id')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('teacher_id')
                  ->references('teacher_id')
                  ->on('teachers')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
