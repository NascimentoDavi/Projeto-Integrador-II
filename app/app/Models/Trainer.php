<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends User
{

    public function teacher ()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

}

