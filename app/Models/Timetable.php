<?php

namespace App\Models;

class TimetableModel extends BaseModel
{
    protected $table = 'timetable';

    protected $fillable = [
        'name',
        'author_id',
        'theme_id',
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
}
