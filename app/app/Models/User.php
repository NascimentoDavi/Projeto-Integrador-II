<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'user_id';
    public $incrementing = false; // For UUID's
    protected $keyType = 'string'; // UUID Type

    protected $fillable = [
        'user_id',
        'username',
        'full_name',
        'email',
        'phone_number',
        'profile_picture_url',
        'fitness_level',
        'physical_stats',
        'current_training_program',
        'workout_agenda',
        'completed_workouts',
        'ofensive',
        'last_workout_date',
        'timezone',
        'role'
    ];

    protected $casts = [
        'physical_stats' => 'array',
        'workout_agenda' => 'array',
        'completed_workouts' => 'array',
        'last_workout_date' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = (string) Str::uuid();
        });

        static::creating(function ($model) {
            if(!$model->role){
                $model->role = Role::TRAINER;
            }
        });
    }

    public function getRoleAttribute($value)
    {
        return Role::from($value);
    }

    public function setRoleAttribute($value)
    {
        $this->attributes['role'] = $value instanceof Role ? $value->value : $value;
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'trainer_exercise', 'trainer_id', 'exercise_id')
                    ->withPivot('day_of_week')
                    ->withTimestamps();
    }

    public function setWorkoutAgenda(array $exercises)
    {
        // Initialize the workout agenda
        $agenda = [
            'sunday' => [],
            'monday' => [],
            'tuesday' => [],
            'wednesday' => [],
            'thursday' => [],
            'friday' => [],
            'saturday' => [],
        ];

        // Loop through each exercise and assign it to the appropriate day of the week
        foreach ($exercises as $exercise) {
            $dayOfWeek = $exercise['day_of_week']; // 'monday', 'tuesday', etc.
            $agenda[$dayOfWeek][] = $exercise;
        }

        // Save the agenda to the user model
        $this->workout_agenda = $agenda;
        $this->save();
    }

    public function feeds ()
    {
        return $this->hasMany(Feed::class);
    }
}
