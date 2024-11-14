<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->role = Role::TEACHER;
        });
    }

    // Relationship with Trainer
    public function trainers ()
    {
        return $this->hasMany(Trainer::class, 'user_id');
    }

    // Method to create a weekly-training-agenda for each Trainer it has

}
