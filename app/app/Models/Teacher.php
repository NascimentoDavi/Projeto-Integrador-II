<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{

    // Relationship with Trainer
    public function trainers ()
    {
        return $this->hasMany(Trainer::class, 'teacher_id');
    }
}
