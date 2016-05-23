<?php

namespace App\Models;


class Lesson extends BaseModel
{
    protected $fillable = [
        'name', 'is_author', 'teaser', 'price', 'length_hr', 'length_min', 'text'
    ];

    public function author()
    {
        return $this->hasOne('App\Models\User', 'author_id');
    }

    public function getOptions()
    {
        $authors = User::where('is_author', '=', 1)->orderBy('name', 'ASC')->get();

        return compact('authors');
    }
}
