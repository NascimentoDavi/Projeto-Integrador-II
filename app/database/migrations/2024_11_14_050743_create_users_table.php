<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            
            $table->string('username')->unique();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->string('fitness_level')->nullable();
            $table->json('physical_stats')->nullable();
            $table->string('current_training_program')->nullable();
            $table->json('workout_agenda')->nullable();
            $table->json('completed_workouts')->nullable();
            $table->integer('ofensive')->nullable();
            $table->dateTime('last_workout_date')->nullable();
            $table->string('timezone')->default('UTC'); 
            $table->timestamps();

            $table->string('role')->default('trainer');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
