<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->uuid('feed_id')->primary();
            $table->uuid('user_id');
            
            $table->string('photo_url');
            $table->text('caption')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade'); // Deletes the feed photos if the user is deleted
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feeds');
    }
};
