<?php

namespace App\Models;


class Lesson extends BaseModel
{
    protected $fillable = [
        'name', 'author_id', 'theme_id', 'teaser', 'price', 'length_hr', 'length_min', 'text'
    ];

    public function author()
    {
        return $this->hasOne('App\Models\User', 'author_id');
    }

    public function theme()
    {
        return $this->hasOne('App\Models\Theme', 'id');
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
