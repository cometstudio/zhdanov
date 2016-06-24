<?php

namespace App\Models;

class Course extends BaseModel
{
    protected $fillable = [
        'name',
        'author_id',
        'theme_id',
        'length',
        'teaser',
        'text',
        'gallery'
    ];

    public function author()
    {
        return $this->hasOne('App\Models\User', 'id', 'author_id');
    }

    public function theme()
    {
        return $this->hasOne('App\Models\Theme', 'id', 'theme_id');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule', 'course_id', 'id');
    }

    public function getOptions()
    {
        $authors = User::where('is_author', '=', 1)->orderBy('name', 'ASC')->get();

        $themes = Theme::all();

        return compact(
            'authors',
            'themes'
        );
    }
}
