<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{

    protected $fillable = [
        'user_id',
        'photo_url',
        'caption'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
