<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainer_exercise', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('exercise_id')->constrained('exercises');
            $table->string('day_of_week');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainer_exercise');
    }
};
