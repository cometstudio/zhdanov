<?php

namespace App\Models;

class Review extends BaseModel
{
    protected $fillable = [
        'course_id',
        'text',
        'gallery'
    ];

    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }


    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule', 'id', 'schedule_id');
    }

    public function getOptions()
    {
        $authors = User::where('is_author', '=', 1)->orderBy('name', 'ASC')->get();

        $themes = Theme::all();

        $courses = Course::all();

        $schedule = Schedule::all();

        return compact(
            'authors',
            'themes',
            'courses',
            'schedule'
        );
    }
}
