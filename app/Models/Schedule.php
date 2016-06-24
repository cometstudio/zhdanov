<?php

namespace App\Models;

class Schedule extends BaseModel
{
    protected $table = 'schedule';
    
    protected $fillable = [
        'course_id',
        'city_id',
        'start_date',
    ];

    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }

    public function city()
    {
        return $this->hasOne('App\Models\City', 'id', 'city_id');
    }
}
