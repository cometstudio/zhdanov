<?php

namespace App\Models;

class UserSchedule extends BaseModel
{
    protected $fillable = [
        'user_id',
        'schedule_id'
    ];

    public function user()
    {
        return $this->hasOne('\App\Models\User', 'id', 'user_id');
    }

    public function schedule()
    {
        return $this->hasOne('\App\Models\Schedule', 'id', 'schedule_id');
    }
}
