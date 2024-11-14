<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends User
{

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->role = Role::TRAINER;
        });
    }

    public function teacher ()
    {
        return $this->belongsTo(Teacher::class, 'user_id');
    }

}

