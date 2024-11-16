<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\MusclesArea;
use App\Enums\DifficultyLevel;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'difficulty_level',
        'muscles_area',
        'description'
    ];

    // Relationship with Trainer
    public function trainer ()
    {
        return $this->belongsToMany(Trainer::class, 'trainer_exercise')
                    ->withPivot('day_of_week')
                    ->withTimestamps();
    }
}
